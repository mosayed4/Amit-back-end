<?php
    require_once('config.php');
    
    // function retrieve all blogs
    function getBlogs(){
        $sql = "SELECT blogs.* , authors.name as author FROM blogs JOIN authors on author_id = authors.id;";
        // 4 run Query 
        $result = mysqli_execute_query($GLOBALS['conn'],$sql);
        return $result;
    }
    // function retrieve all blogs
    function insertBlog($title,$short_description,$author_id,$content){
        $sql = "INSERT INTO blogs (title,short_description,author_id,content) VALUES (?,?,?,?)";
        // 4 run Query 
        $result = mysqli_execute_query($GLOBALS['conn'],$sql,[$title,$short_description,$author_id,$content]);
        return $result;
    }
    // function retrieve all blogs
    function updateBlog($id,$title,$short_description,$author_id,$content){
        $sql = "UPDATE blogs SET title = ?,short_description = ?,author_id = ?,content =?  where id=?";
        // 4 run Query 
        $result = mysqli_execute_query($GLOBALS['conn'],$sql,[$title,$short_description,$author_id,$content,$id]);
        return $result;
    }
    // function retrieve 1 blog via id
    function getBlog($id){
        $sql2 = "UPDATE blogs SET views = views + 1 WHERE id = ?";
        mysqli_execute_query($GLOBALS['conn'],$sql2,[$id]);

        $sql = "SELECT blogs.* , authors.name as author, authors.id as authors_id  FROM blogs JOIN authors on author_id = authors.id WHERE blogs.id = ?";
        // 4 run Query 
        $result = mysqli_execute_query($GLOBALS['conn'],$sql,[$id]);
        return mysqli_fetch_assoc($result);
    }
  
    
    // function retrieve 1 blog via id
    function deleteBlog($id){
       
        $sql = "DELETE FROM blogs WHERE blogs.id = ?";
        // 4 run Query 
        
        return mysqli_execute_query($GLOBALS['conn'],$sql,[$id]);
    }
  
