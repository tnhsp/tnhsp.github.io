<?php
$z[0]=Array("global","",104,130);
$z[0][4]=array();
$z[0][4]['name']="cfg_cmspath";
$z[1]=Array("global","",464,490);
$z[1][4]=array();
$z[1][4]['name']="cfg_webname";
$z[2]=Array("global","",538,568);
$z[2][4]=array();
$z[2][4]['name']="cfg_description";
$z[3]=Array("global","",609,636);
$z[3][4]=array();
$z[3][4]['name']="cfg_keywords";
$z[4]=Array("global","",682,708);
$z[4][4]=array();
$z[4][4]['name']="cfg_cmspath";
$z[5]=Array("global","",792,818);
$z[5][4]=array();
$z[5][4]['name']="cfg_cmspath";
$z[6]=Array("global","",892,918);
$z[6][4]=array();
$z[6][4]['name']="cfg_cmspath";
$z[7]=Array("global","",991,1017);
$z[7][4]=array();
$z[7][4]['name']="cfg_cmspath";
$z[8]=Array("global","",1089,1115);
$z[8][4]=array();
$z[8][4]['name']="cfg_cmspath";
$z[9]=Array("global","",1189,1215);
$z[9][4]=array();
$z[9][4]['name']="cfg_cmspath";
$z[10]=Array("global","",1292,1318);
$z[10][4]=array();
$z[10][4]['name']="cfg_cmspath";
$z[11]=Array("global","",1836,1862);
$z[11][4]=array();
$z[11][4]['name']="cfg_cmspath";
$z[12]=Array("global","",1901,1927);
$z[12][4]=array();
$z[12][4]['name']="cfg_cmspath";
$z[13]=Array("global","",2427,2453);
$z[13][4]=array();
$z[13][4]['name']="cfg_cmspath";
$z[14]=Array("global","",2492,2518);
$z[14][4]=array();
$z[14][4]['name']="cfg_cmspath";
$z[15]=Array("include","",2973,3008);
$z[15][4]=array();
$z[15][4]['filename']="head.htm";
$z[16]=Array("myppt","\r\n          <a href=\"[field:url/]\"><div class=\"item\" style=\"background:url([field:pic/]) no-repeat center center;background-size:cover;\"></div></a>\r\n          ",3349,3544);
$z[16][4]=array();
$z[16][4]['typeid']="1";
$z[17]=Array("global","",4056,4082);
$z[17][4]=array();
$z[17][4]['name']="cfg_cmspath";
$z[18]=Array("global","",4146,4172);
$z[18][4]=array();
$z[18][4]['name']="cfg_cmspath";
$z[19]=Array("global","",5095,5121);
$z[19][4]=array();
$z[19][4]['name']="cfg_cmspath";
$z[20]=Array("channelartlist","\r\n              <div class=\"course_tit\"> <span class=\"flt\">课程：</span>\r\n            <ul>\r\n                  {dede:channel type='son' currentstyle=\"\r\n                  <li class='on'><a href='~typelink~'>~typename~</a></li>\r\n                  \"}\r\n                  <li [field:global name=autoindex runphp=\"yes\"](@me==0)? @me=\"class='on'\":@me=\"\";[/field:global]><a href=\"javascript:void(0)\">[field:typename/]</a></li>\r\n                  {/dede:channel}\r\n                </ul>\r\n            <span class=\"frt\"><a target=\"_blank\" href=\"{dede:field name='typeurl'/}\">更多课程 ></a></span> </div>\r\n              ",5494,6163);
$z[20][4]=array();
$z[20][4]['typeid']="2,2";
$z[21]=Array("channelartlist","\r\n            <div class=\"item\">\r\n                  <ul>\r\n                {dede:arclist titlelen='60' row='3' addfields='zjr,kcxx' channelid='17'}\r\n                <li>\r\n                      <div class=\"list\">\r\n                    <div class=\"img\"> <a target=\"_blank\" href=\"[field:arcurl/]\"><img  src=\"[field:litpic/]\"/></a>\r\n                          <!--<div class=\"img_text\">\r\n                        <p>主讲人：[field:zjr/]</p>\r\n                        <h3>2017年会计培训</h3>\r\n                        <h3>新手入门</h3>\r\n                        <h3>基础入门</h3>\r\n                      </div>--> \r\n                        </div>\r\n                    <div class=\"text\">\r\n                          <h3><a href=\"[field:arcurl/]\">[field:title/]</a></h3>\r\n                          <div class=\"div_tips\"> [field:kcxx runphp=yes]\r\n                        \$arr = explode(',',@me);\r\n                        \$result = '';\r\n                        for(\$index=0;\$index<count(\$arr);\$index++){\r\n    \$result .= \"<label>\$arr[\$index]</label>\";\r\n}\r\n@me = \$result;\r\n[/field:kcxx] \r\n                 </div>\r\n                          <p>[field:description function='cn_substr(@me,160)'/]...[<a href=\"[field:arcurl/]\" target=\"_blank\" style=\"color: #0a62bb;\">详细</a>]</p>\r\n                          <!--<div class=\"btn\"><a href=\"/a/zaixianbaoming\">了解详情</a></div>-->\r\n                        <div class=\"btn\"><a href=\"[field:arcurl/]\" target=\"_blank\">了解更多</a></div>\r\n                        </div>\r\n                    <div class=\"clear\"></div>\r\n                  </div>\r\n                    </li>\r\n                {/dede:arclist}\r\n              </ul>\r\n                </div>\r\n            ",6202,7964);
$z[21][4]=array();
$z[21][4]['typeid']="2";
$z[22]=Array("channelartlist","\r\n    <div class=\"page page2\">\r\n          <div class=\"wrap\">\r\n        <div class=\"page_tit  animated more-fast\" data-animation=\"fadeInLeft\">\r\n              <!--<h3>在线教育<span>·{dede:field name='typename'/}</span></h3>--><h3><span>{dede:field name='typename'/}</span></h3>\r\n              <p></p>\r\n            </div>\r\n        <div class=\"team_owl animated fast\" data-animation=\"fadeInUp\">\r\n              <div class=\"owl\"> {dede:arclist titlelen='50' orderby='pubdate' addfields='byyx' channelid='18'}\r\n            <div class=\"item\"> <a target=\"_blank\" href=\"[field:arcurl/]\">\r\n              <div class=\"img\"><img src=\"[field:litpic/]\"/>\r\n                <p>[field:byyx/]</p>\r\n              </div>\r\n              <div class=\"text\">\r\n                <h3>[field:title/]</h3>\r\n                <p>[field:description function='cn_substr(@me,150)'/]...</p>\r\n              </div>\r\n              </a> </div>\r\n            {/dede:arclist} </div>\r\n            </div>\r\n      </div>\r\n        </div>\r\n    ",8027,9079);
$z[22][4]=array();
$z[22][4]['typeid']="7,7";
$z[23]=Array("channelartlist","\r\n    <div class=\"page page3\">\r\n          <div class=\"wrap\">\r\n        <div class=\"page_tit animated more-fast\" data-animation=\"fadeInRight\">\r\n              <!--<h3>韩顺平教育<span>·{dede:field name='typename'/}</span></h3>--><h3><span>{dede:field name='typename'/}</span></h3>\r\n              <p></p>\r\n            </div>\r\n        <div class=\"case_list animated more-fast\" data-animation=\"fadeInLeft\">\r\n              <ul>\r\n            {dede:arclist row='6' titlelen='50' orderby='pubdate'}\r\n            <li> <a href=\"[field:arcurl/]\">\r\n              <div class=\"img\"><img src=\"[field:litpic/]\"/>\r\n                <div class=\"img_text\"><!--<span>[field:title/]</span>--><span></span>\r\n                  <!--<p>工资： ([field:shorttitle/])</p>--><p></p>\r\n                </div>\r\n              </div>\r\n              <div class=\"text\">\r\n                <p>[field:description function='cn_substr(@me,122)'/]...</p>\r\n              </div>\r\n              </a> </li>\r\n            {/dede:arclist}\r\n          </ul>\r\n            </div>\r\n        <div class=\"more\"><a target=\"_blank\" href=\"{dede:field name='typeurl'/}\">更多案例</a></div>\r\n      </div>\r\n        </div>\r\n    ",9086,10313);
$z[23][4]=array();
$z[23][4]['typeid']="8,8";
$z[24]=Array("type","\r\n        <h3>韩顺平教育<span>·[field:typename/]</span></h3>\r\n        ",10427,10538);
$z[24][4]=array();
$z[24][4]['typeid']="13";
$z[25]=Array("arclist","\r\n              <li>\r\n            <div class=\"img1\"><img src=\"[field:litpic/]\" /></div>\r\n          </li>\r\n              ",10685,10887);
$z[25][4]=array();
$z[25][4]['typeid']="13";
$z[25][4]['row']="12";
$z[25][4]['titlelen']="50";
$z[25][4]['orderby']="pubdate";
$z[26]=Array("type"," <a href=\"[field:typelink/]\"><span>[field:typename/]</span></a>",11106,11204);
$z[26][4]=array();
$z[26][4]['typeid']="12";
$z[27]=Array("channelartlist","\r\n    <div class=\"page page6\">\r\n          <div class=\"wrap\">\r\n        <div class=\"page_tit animated more-fast\" data-animation=\"fadeInDown\">\r\n              <!--<h3>韩顺平教育<span>·{dede:field name='typename'/}</span></h3>--><h3><span>{dede:field name='typename'/}</span></h3>\r\n              <p></p>\r\n            </div>\r\n        <div class=\"news_list animated fast\" data-animation=\"fadeInUp\">\r\n              <div class=\"owl\"> {dede:arclist titlelen='50' orderby='pubdate'}\r\n            <div class=\"item\"> <a target=\"_blank\" href=\"[field:arcurl/]\">\r\n              <div class=\"img\"><img src=\"[field:litpic/]\"/></div>\r\n              <div class=\"text\">\r\n                <h3>[field:global name=autoindex runphp=\"yes\"](@me==1)? @me=\"\r\n                  <label>最新</label>\r\n                  \":@me=\"\";[/field:global]<span>[field:title/] </span></h3>\r\n                <p>[field:description function='cn_substr(@me,80)'/]...</p>\r\n                <div class=\"bottom\"> <span class=\"span1\">[field:typename/]</span> <span class=\"span2\">[field:pubdate function=MyDate('Y-m-d',@me)/]</span> </div>\r\n              </div>\r\n              </a> </div>\r\n            {/dede:arclist} </div>\r\n            </div>\r\n        <div class=\"more\"><a target=\"_blank\" href=\"{dede:field name='typeurl'/}\">更多资讯</a></div>\r\n      </div>\r\n        </div>\r\n    ",11234,12628);
$z[27][4]=array();
$z[27][4]['typeid']="11,11";
$z[28]=Array("type","\r\n                  <h3><span>[field:typename/]</span></h3>\r\n                  ",12748,12862);
$z[28][4]=array();
$z[28][4]['typeid']="13";
$z[29]=Array("arclist","\r\n                          <img src=\"[field:litpic/]\" />\r\n                      ",13005,13168);
$z[29][4]=array();
$z[29][4]['typeid']="13";
$z[29][4]['row']="12";
$z[29][4]['titlelen']="50";
$z[29][4]['orderby']="pubdate";
$z[30]=Array("type","\r\n              <h3><span>[field:typename/]</span></h3>\r\n              ",13393,13499);
$z[30][4]=array();
$z[30][4]['typeid']="14";
$z[31]=Array("arclist","\r\n            <li><a href=\"javascript:void(0)\"><img src=\"[field:litpic/]\"/></a></li>\r\n            ",13651,13831);
$z[31][4]=array();
$z[31][4]['typeid']="14";
$z[31][4]['row']="12";
$z[31][4]['titlelen']="50";
$z[31][4]['orderby']="pubdate";
$z[32]=Array("include","",16011,16048);
$z[32][4]=array();
$z[32][4]['filename']="footer.htm";

?>