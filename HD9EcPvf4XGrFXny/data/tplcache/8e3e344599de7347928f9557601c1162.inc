<div class="course_tit"> <span class="flt">课程：</span>
            <ul>
                  {dede:channel type='son' currentstyle="
                  <li class='on'><a href='~typelink~'>~typename~</a></li>
                  "}
                  <li [field:global name=autoindex runphp="yes"](@me==0)? @me="class='on'":@me="";[/field:global]><a href="javascript:void(0)">[field:typename/]</a></li>
                  {/dede:channel}
                </ul>
            <span class="frt"><a target="_blank" href="{dede:field name='typeurl'/}">更多课程 ></a></span> </div>