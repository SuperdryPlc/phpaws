# PHP AWS Connection

Version: 1.0.0

## Table of Contents

- [Summary](#summary)
- [Install](#install)
  - [Compile](#Compile) 
- [Usage](#usage)
  - [Call AWS Service](#Call AWS Service)
  - _S3_
  - [Call S3](#Call S3)
  - [Set S3 Bucket](#Set S3 Bucket)
  - [S3 List Objects](#S3 List Objects)
- [Maintainers](#maintainers)

## Summary
PHP Library to connect to the AWS Services

## Install
Install Composer:
```sh
$ php -r "readfile('https://getcomposer.org/installer');" | php
```

Install dependencies:
```sh
$ php composer.phar install
```

Add to PHP
```php
require 'vendor/autoload.php';
```

## AWS Credentials
The code here will not allow for the credentials to be added to the code. We'll use the environment variables, or if in AWS, use IAMS
The AWS SDK will use this by default, you dont need to configure it
###### Bash
```bash 
$ export AWS_ACCESS_KEY_ID=
$ export AWS_SECRET_ACCESS_KEY=
$ export AWS_DEFAULT_REGION=
```

###### PowerShell
```bash
PS C:\> $Env:AWS_ACCESS_KEY_ID=""
PS C:\> $Env:AWS_SECRET_ACCESS_KEY=""
PS C:\> $Env:AWS_DEFAULT_REGION=""
```

## Call AWS Service
```php
$this->aws = new aws();
```

# S3

#### Call S3
```php
$this->s3 = $this->aws->s3();
```

#### Set S3 Bucket
```php
$this->s3->setBucket('sd-test-web-ap-share');
```

#### S3 Commands

##### List Objects
S3 List Objects in a "folder"
```php
$list = $this->s3->listObjects('folder');
foreach ($list as $object) {
    print_r($object['Key']);
}
```

##### Get object
Get object ($s3filename) from S3 and save it locally $localFilename
```php
$this->s3->getObject($localFilename, $s3filename)
```


## Maintainers
[@SuperdryPlc](https://github.com/SuperdryPlc/).
