<?php

namespace superdry\phpaws;

class aws
{
    public function s3(){
        return new S3();
    }


}