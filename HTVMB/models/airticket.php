<?php
class Ticket extends Db{
    
    public function getAllTicket($page, $per_page){
        $first_link = ($page-1) * $per_page;
        $sql = "SELECT *
        FROM `airticket`, `airline_company`, `category`, `age`
        WHERE `airticket`.`company_id` = `airline_company`.`company_id`
        AND `airticket`.`cate_id` = `category`.`cate_id`
        AND `airticket`.`age_id` = `age`.`age_id`
        ORDER BY `id`
         LIMIT $first_link, $per_page";

        $result = self::$connection->query($sql);
        return $this->getData($result);
    }
    public function getSearch($key, $key2){
        $sql = self::$connection->prepare("SELECT *
        FROM `airticket`, `airline_company`, `category`, `age`
        WHERE `airticket`.`company_id` = `airline_company`.`company_id`
        AND `airticket`.`cate_id` = `category`.`cate_id`
        AND `airticket`.`age_id` = `age`.`age_id`
        AND `diemdi`
        LIKE '%".$key."%' AND `diemden` LIKE '%".$key2."%' ");
        return $this->select($sql);
    }

    public function getAll(){
        $sql = "SELECT * FROM `airticket`";
        $result = self::$connection->query($sql);
        $soluong = mysqli_num_rows($result);
        return $soluong;
    }

    public function paginate($url, $total, $page, $per_page){
        $total_links = ceil($total/$per_page);
        $link = "";
        for($j=1; $j <= $total_links; $j++)
        {
            $link = $link."<a href='$url?page=$j'> $j </a>";
        }
        return $link;
    }
    public function demtimkiem($key, $key2) {
        $key1 = "%".$key."%";
        $key3 = "%".$key2."%";
        $sql = "SELECT * FROM `airticket` 
        WHERE `diemdi` LIKE '$key1' AND `diemden` LIKE '$key3' ORDER BY `ID` DESC";
        $result = self::$connection->query($sql);
        $soluong = mysqli_num_rows($result);
        return $soluong;
    }

    // public function getSearch2($page, $per_page, $key) {
    //     $first_link = ($page - 1) * $per_page; 
    //     $key1 = "%".$key."%";
    //     $sql = "SELECT *
    //     FROM `airticket`, `airline_company`, `category`, `age`
    //     WHERE `airticket`.`company_id` = `airline_company`.`company_id`
    //     AND `airticket`.`cate_id` = `category`.`cate_id`
    //     AND `airticket`.`age_id` = `age`.`age_id`
    //     AND `diemdi`
    //     LIKE '$key1' ORDER BY `ID`
    //     LIMIT $first_link, $per_page";
    //     $result = self::$connection->query($sql);
    //     return $this->getData($result);
    // }

    public function paginate1($url, $total, $page, $per_page, $key)
    {
        $total_links = ceil($total/$per_page);
        
        $link =""; 
            
        for($j=1; $j <= $total_links ; $j++) 
            {
            $link = $link."<a href='$url?page=$j&key=$key'> $j </a>";
            }       
        return $link; 
    } 
    public function getAllDay(){
        $sql = self::$connection->prepare("SELECT DISTINCT ngaydi FROM airticket");
        return $this->select($sql);
    }
    public function getVeByDay($ngaydi){
        $sql = self::$connection->prepare("SELECT * FROM `airticket`,`airline_company`
        WHERE `airticket`.company_id = `airline_company`.company_id
        AND `ngaydi` = ?"); 
        $sql->bind_param('s',$ngaydi);
        return $this->select($sql);
    }
     //phuong thuc lay ra 1 san pham theo id
     public function getProductById($id){
        $sql = self::$connection->prepare("SELECT * FROM `airticket`,`city_code`
        WHERE `airticket`.diemdi=`city_code`.code
        AND id = ?");
        $sql->bind_param("i",$id);
        return $this->select($sql);
    }
}