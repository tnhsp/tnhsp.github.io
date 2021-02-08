<li>
                <div class="img1"> <a href="[field:arcurl/]"> <img src="[field:litpic/]"/> </a> </div>
                <div class="web">
                      <h3><a href="[field:arcurl/]">[field:global name=autoindex runphp="yes"](@me==1)? @me="<span>最新</span>":@me="";[/field:global][field:title/]</a></h3>
                      <p>[field:description function='cn_substr(@me,300)'/]...</p>
                      <div class="date"> <span class="sp1">[field:typename/]</span><span class="sp2">[field:pubdate function=MyDate('Y-m-d',@me)/]</span> </div>
                    </div>
                <div class="clear"></div>
              </li>