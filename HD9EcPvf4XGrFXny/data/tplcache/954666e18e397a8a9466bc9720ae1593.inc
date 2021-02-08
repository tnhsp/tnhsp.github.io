<div class="item"> <a href="[field:arcurl/]">
              <div class="img"><img src="[field:litpic/]"/></div>
              <div class="text">
                <h3>[field:global name=autoindex runphp="yes"](@me==1)? @me="
                  <label>最新</label>
                  ":@me="";[/field:global]<span>[field:title/] </span></h3>
                <p>[field:description function='cn_substr(@me,80)'/]...</p>
                <div class="bottom"> <span class="span1">[field:typename/]</span> <span class="span2">[field:pubdate function=MyDate('Y-m-d',@me)/]</span> </div>
              </div>
              </a> </div>