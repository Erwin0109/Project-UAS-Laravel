<?php 

namespace App\Models\Traits\Attributes;

use Illuminate\Support\Str;

trait UserAttributes{

    function getJenisKelaminStringAttribute(){
        return ($this->jenis_kelamin == 1) ? "Laki-laki" : "Perempuan";
    }

    function getLevelStringAttribute(){
        return ($this->level == 1) ? "Admin" : "Pengguna";
    }

    function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    function setUsernameAttribute($value){
        $this->attributes['username'] = strtolower($value);
    }

    function handleUpload(){
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/user";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();
        }
    }
    
    function handleDelete(){
        $foto = $this->foto;
        $path = public_path($foto);
        if(file_exists($path)){
            unlink($path);
        }
        return true;
    }  
}