<li> <a target="_blank" href="[field:arcurl/]">
              <div class="img"> <img src="[field:litpic/]"/>
                <div class="text">
                  <p> [field:kcxx runphp=yes]
                    $arr = explode(',',@me);
                    $result = '';
                    for($index=0;$index<count($arr);$index++){
    $result .= "$arr[$index]  ";
}
@me = $result;
[/field:kcxx]
                  
                  </p>
                </div>
              </div>
              </a>
                  <div class="web">
                <h4><a target="_blank" href="[field:arcurl/]">[field:title/]</a></h4>
                      {dede:arclist row='3' titlelen='50' addfields='bm' channelid='17'}
                      [field:bm/]人 报名~
                      {/dede:arclist}
                <p>[field:bm/]人 报名<span>[field:writer/]</span></p>
              </div>
                </li>