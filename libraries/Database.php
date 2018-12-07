class Database
{
    public $link;
    public function __construct()
    {
        $this->link = mysqli_connect("localhost","root","","")or die();
        mysql_set_charset($this->link,"utf8");
    }
}