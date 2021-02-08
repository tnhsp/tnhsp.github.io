<div class="page page3">
          <div class="wrap">
        <div class="page_tit animated more-fast" data-animation="fadeInRight">
              <!--<h3>韩顺平教育<span>·{dede:field name='typename'/}</span></h3>--><h3><span>{dede:field name='typename'/}</span></h3>
              <p></p>
            </div>
        <div class="case_list animated more-fast" data-animation="fadeInLeft">
              <ul>
            {dede:arclist row='18' titlelen='50' orderby='pubdate'}
            <li> <a target="_blank" href="[field:arcurl/]">
              <div class="img"><img src="[field:litpic/]"/>
                <div class="img_text"><!--<span>[field:title/]</span>--><span></span>
                  <!--<p>工资： ([field:shorttitle/])</p>--><p></p>
                </div>
              </div>
              <div class="text">
                <p>[field:description function='cn_substr(@me,122)'/]...</p>
              </div>
              </a> </li>
            {/dede:arclist}
          </ul>
            </div>
        <div class="more"><a target="_blank" href="{dede:field name='typeurl'/}">更多学员</a></div>
      </div>
        </div>