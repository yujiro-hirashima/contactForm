<?php
  mb_language("ja");
  mb_internal_encoding("UTF-8");
  mb_send_mail('unmejjapip@gmail.com','表題Subject',"メッセージ\r\n次の行\r３行目\n４行目");
?>