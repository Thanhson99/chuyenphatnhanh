<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Illuminate\Support\Str;
use File;

class news extends Model
{
    // tên table
    protected $table = 'news';
    public $search_field = [
        'title', 'description', 'new_type'
    ];
    public $resize = [
        'standard' => ['width' => 500],
        'thumb' => ['width' => 150]
    ];

    public function list_news($params = null){
        // lấy trường dữ liệu
        $query = $this->select('*');
        // kiểm tra fillter
        if($params['fillter']['news-type'] != 'all'){
            $query->where('new_type', $params['fillter']['news-type']);
        }
        // kiểm tra search
        if(!empty($params['search']['value'])){
            if($params['search']['field'] != 'all'){
                $search_field =  in_array($params['search']['field'], $this->search_field) ? $params['search']['field'] : 'title';
                $query->where($search_field, 'LIKE', '%' . $params['search']['value'] . '%');
            }else{
                foreach($this->search_field as $key => $search_field){
                    $query->orWhere($search_field, 'LIKE', '%' . $params['search']['value'] . '%');
                }
            }
        }
        // lấy hết theo id từ bé đến lớn
        $query = $query->orderBy("id", "ASC")->paginate(10); // phân trang theo số phần tử
        return $query;
    }

    public function delete_news($id){
        // tìm user theo id sau đó xóa
        $query = $this->find($id)->delete();
        return $query;
    }

    public function saveItem($params){
        // gán data = dữ liệu submit form
        $data = $params['form'];
        // nếu không tồn tại id tạo đối tượng và thêm mới
        if(!isset($params['id'])){
            $news = new news();
            $news->title = $data['title'];
            $news->description = $data['description'];
            $news->new_type = $data['new_type'];
            $news->slug = $data['slug'];
            $news->meta_title = $data['meta_title'];
            $news->meta_description = $data['meta_description'];
            $news->meta_keywords = $data['meta_keywords'];
            // gọi phương thức upload images để lấy tên ảnh lưu vào database
            $news->picture = $this->uploadImage($params['picture']);
            $news->save();
            // trả về id
            return $news->id;
        }else{
            // nếu đã có id thì update database
            // update ảnh
            // kiểm tra nếu update ảnh ms update
            if(isset($params['picture'])){
                $picture = $this->uploadImage($params['picture']);
                $data['picture'] = $picture;
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
        $img->save('Images/News/' . $newName);
        // kiểm tra size khác rỗng
        if(!empty($this->resize)){
            // resize ảnh lưu vào đường dẫn
            foreach($this->resize as $folder => $size){
                $img->resize($size['width'], null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save('Images/News/' . $folder . '/' . $newName);
            }
        }
        return $newName;
    }

    public function removeImage($id){
        $query = $this->find($id)->get();
        $img_name = $query[0]['picture'];
        $path = public_path() . '/Images/News/' . $img_name;
        if(File::exists($path)){
            File::delete($path);
        }
        if(!empty($this->resize)){
            // resize ảnh lưu vào đường dẫn
            foreach($this->resize as $folder => $size){ 
                $path = public_path() . '/Images/News/' . $folder . '/' .  $img_name;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
        }
    }
}
