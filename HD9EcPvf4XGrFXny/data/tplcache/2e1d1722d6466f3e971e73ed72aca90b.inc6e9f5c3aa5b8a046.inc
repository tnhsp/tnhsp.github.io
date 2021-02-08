<?php
$z[0]=Array("arclist","\r\n                <li>\r\n                      <div class=\"list\">\r\n                    <div class=\"img\"> <img src=\"[field:litpic/]\" width=\"434\" height=\"274\"/> \r\n                          <!--<div class=\"img_text\">\r\n                        <p>主讲人：[field:zjr/]</p>\r\n                        <h3>2017年会计培训</h3>\r\n                        <h3>新手入门</h3>\r\n                        <h3>基础入门</h3>\r\n                      </div>--> \r\n                        </div>\r\n                    <div class=\"text\">\r\n                          <h3><a href=\"[field:arcurl/]\">[field:title/]</a></h3>\r\n                          <div class=\"div_tips\"> [field:kcxx runphp=yes]\r\n                        \$arr = explode(',',@me);\r\n                        \$result = '';\r\n                        for(\$index=0;\$index<count(\$arr);\$index++){\r\n    \$result .= \"<label>\$arr[\$index]</label>\";\r\n}\r\n@me = \$result;\r\n[/field:kcxx] \r\n                 </div>\r\n                          <p>[field:description function='cn_substr(@me,160)'/]...[<a href=\"[field:arcurl/]\" style=\"color: #0a62bb\">详细</a>]</p>\r\n                          <div class=\"btn\"><a href=\"/a/zaixianbaoming\">我要报名</a></div>\r\n                        </div>\r\n                    <div class=\"clear\"></div>\r\n                  </div>\r\n                    </li>\r\n                ",60,1483);
$z[0][4]=array();
$z[0][4]['titlelen']="60";
$z[0][4]['row']="3";
$z[0][4]['addfields']="zjr,kcxx";
$z[0][4]['channelid']="17";

?>