<div class="item">
                  <ul>
                {dede:arclist titlelen='60' row='3' addfields='zjr,kcxx' channelid='17'}
                <li>
                      <div class="list">
                    <div class="img"> <img src="[field:litpic/]" width="434" height="274"/> 
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
                          <p>[field:description function='cn_substr(@me,160)'/]...[<a href="[field:arcurl/]" style="color: #0a62bb">详细</a>]</p>
                          <div class="btn"><a href="/a/zaixianbaoming">我要报名</a></div>
                        </div>
                    <div class="clear"></div>
                  </div>
                    </li>
                {/dede:arclist}
              </ul>
                </div>