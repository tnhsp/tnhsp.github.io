<div class="page page6">
          <div class="wrap">
        <div class="page_tit animated more-fast" data-animation="fadeInDown">
              <h3>韩顺平教育<span>·{dede:field name='typename'/}</span></h3>
              <p></p>
            </div>
        <div class="news_list animated fast" data-animation="fadeInUp">
              <div class="owl"> {dede:arclist titlelen='50' orderby='pubdate'}
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
            {/dede:arclist} </div>
            </div>
        <div class="more"><a href="{dede:field name='typeurl'/}">更多资讯</a></div>
      </div>
        </div>