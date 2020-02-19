# Uploading Files

## Add a Form to Uploading an Article Image

- [BLOB and TEXT Data Types](https://mariadb.com/kb/en/blob-and-text-data-types/)
- [input type="file"](https://devdocs.io/html/element/input/file)
- [$_POST](https://www.php.net/manual/en/reserved.variables.post.php)
- [$_FILES](https://www.php.net/manual/en/reserved.variables.files.php)

---

## Handle the Upload Error Code

- [Error Messages Explained](https://www.php.net/manual/en/features.file-upload.errors.php)

---

## Restrict the Size of an Uploaded File in an Individual Form

- `phpinfo();`
- post_max_size
- upload_max_filesize
- Path: **Loaded Configuration File**
- [How to change configuration settings](https://www.php.net/manual/en/configuration.changes.php)
- [ini_set](https://www.php.net/manual/en/function.ini-set.php)
- [Error Messages Explained](https://www.php.net/manual/en/features.file-upload.errors.php)
- [display-startup-errors](https://www.php.net/manual/en/errorfunc.configuration.php#ini.display-startup-errors)
- [does 1 MB mean](https://superuser.com/questions/373579/is-it-true-that-1-mb-can-mean-either-1000000-bytes-1024000-bytes-or-1048576-by)

---

## Restrict the Type of an Uploaded File

- [MIME types](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)
- [Incomplete list of MIME types](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Complete_list_of_MIME_types)
- [POST method uploads](https://www.php.net/manual/en/features.file-upload.post-method.php)
- [Files with Multiple Extensions](http://httpd.apache.org/docs/current/mod/mod_mime.html#multipleext)
- [File Information](https://www.php.net/manual/en/book.fileinfo.php)

---

## Create a Folder for Uploads and Move the Uploaded File into it

---

## Sanitise the Uploaded Filename as a Security Precaution

- [pathinfo](https://www.php.net/manual/en/function.pathinfo.php)

---

## Don't Overwrite Existing Files in the Uploads Folder

- [file_exists](https://www.php.net/manual/en/function.file-exists.php)
- Finding an unused filename
  - example.png
  - example-1.png
  - example-2.png
  - example-3.png

---

## Save the Filename to the Article Record in the Database

- [substr](https://www.php.net/substr)
- [mb_substr](https://www.php.net/mb_substr)

---

## Display the Uploaded Image if an Article has one

---

## Delete the Previous image File when an Artile Image is Updated

---

## Add an Option to Delete an Article's Image file
