<li>
                      <div class="list">
                    <div class="img"> <a target="_blank" href="[field:arcurl/]"><img src="[field:litpic/]" width="434" height="274"/></a>
                          <!--<div class="img_text">
                        <p>主讲人：[field:zjr/]</p>
                        <h3>2017年会计培训</h3>
                        <h3>新手入门</h3>
                        <h3>基础入门</h3>
                      </div>--> 
                        </div>
                    <div class="text">
                          <h3><a href="[field:arcurl/]">[field:title/]</a></h3>
                          <div class="div_tips"> [field:kcxx runphp=yes]
                        $arr = explode(',',@me);
                        $result = '';
                        for($index=0;$index<count($arr);$index++){
    $result .= "<label>$arr[$index]</label>";
}
@me = $result;
[/field:kcxx] 
                 </div>
                          <p>[field:description function='cn_substr(@me,160)'/]...[<a href="[field:arcurl/]" target="_blank" style="color: #0a62bb;">详细</a>]</p>
                          <!--<div class="btn"><a href="/a/zaixianbaoming">了解详情</a></div>-->
                        <div class="btn"><a href="[field:arcurl/]" target="_blank">了解更多</a></div>
                        </div>
                    <div class="clear"></div>
                  </div>
                    </li>