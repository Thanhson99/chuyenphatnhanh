<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Image;
use Illuminate\Support\Str;
use File;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider_name', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'provider_name', 'provider_id', 'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';
    public $search_field = [
        'title', 'description', 'new_type'
    ];

    public function saveItem($params){
        // gán data = dữ liệu submit form
        $data = $params['form'];
        // nếu không tồn tại id tạo đối tượng và thêm mới
        if(!isset($params['id'])){
            $newUser = new User();
            $newUser->provider_name = $data['provider_name'];
            $newUser->provider_id = '';
            $newUser->email = $data['email'];
            $newUser->name = $data['name'];
            $newUser->CMND = $data['CMND'];
            $newUser->phone_number = $data['phone_number'];
            $newUser->password = $data['password'];
            $newUser->customer_type = $data['customer_type'];
            $newUser->email_verified_at = now();
            $newUser->remember_token = '';
            // gọi phương thức upload images để lấy tên ảnh lưu vào database
            $newUser->avatar = $this->uploadImage($params['avatar']);
            $newUser->save();
            // trả về id
            return $newUser->id;
        }else{
            // nếu đã có id thì update database
            // update ảnh
            // kiểm tra nếu update ảnh ms update
            if(isset($params['avatar'])){
                $picture = $this->uploadImage($params['avatar']);
                $data['avatar'] = $picture;
                // xóa hình cũ
                $this->removeImage($params['id']);
            }
            // update data
            $this->where('id', $params['id'])->update($data);
            // trả về id
            return $params['id'];
        }
        
    }

    public function uploadImage($objImage){
        // gọi phương thức
        $img = Image::make($objImage);
        // tạo name random 10 kí tự và giữ lại định dạng đuôi ảnh(png, jpg)
        $newName = Str::random(10) . "." . $objImage->getClientOriginalExtension();
        // lưu vào đường dẫn
        $img->save('Images/Users/' . $newName);
        return $newName;
    }

    public function removeImage($id){
        $query = $this->select('avatar')->where('id', $id)->get();
        $img_name = $query[0]['avatar'];
        $path = public_path() . '/Images/Users/' . $img_name;
        if(File::exists($path)){
            File::delete($path);
        }
    }
}
