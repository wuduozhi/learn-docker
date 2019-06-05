<?php
    //连接本地的 Redis 服务
   $redis = new Redis();
   $redis->connect('website_redis_1', 6379);
   $redis->auth("lBccGkGFn4COvmlO");
   echo "Connection to server sucessfully";
         //查看服务是否运行
   echo "Server is running: " . $redis->ping();
?>
