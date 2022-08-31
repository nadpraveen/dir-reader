This is simple director reader written in PHP. This will read the contents of the given directory and return an array containing the contents

- install it using composer `composer require techunico/dir-reader`
- include path `require "vendor/autoload.php"`
- use reader `use Techunico\DirReader\Reader`
- example

`
$contents = new Reader;

$contents->dirreader('$directory');
`
