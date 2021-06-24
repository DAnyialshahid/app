<div class="header__top-bar" id="menu_bar2">
    <div class="container">
        <div class="header-container clearfix">
            <div class="logo pull-left text-left">
                <a href="/" title="">
                    <img    src="<?=logo?>"     height="40" alt="" />
                </a>
            </div>
            <div class="search">
                <form action="#" id="top-search-form" class="store-search text-left" style="margin-top: auto; margin-bottom: auto; "> <div class="input-group input-group-lg search-wrap">
                        <button type="submit" class="input-group-addon" aria-label="Search"><i class="df df-search"></i></button>


                        <input type="text" class="form-control typeahead" id="search_input" name="q" required="" placeholder="Search for stores, offers or brands" autocomplete="off"  style="    border-top-left-radius: 10px; border-top-right-radius: 10px;" />
                   
                    </div>


                </form>
            </div>
            <div class="top-links pull-right">
                <div class="header__top-links-wrap">
                    <ul class="header__top-links pull-right">
                        <li class="counter">
                            <a href="#" onclick="changeProfileTab('#user-sfollowed')" class="header__counter follows">
                                <i class="df df-follow"></i> <span class="header__counter-box" data-count="0"> </span>
                            </a>
                        </li>
                        <li class="counter">
                            <a href="#" onclick="changeProfileTab('#user-csaved')" class="header__counter coupons">
                                <i class="df df-save"></i> <span class="header__counter-box" data-count="0"> </span>
                            </a>
                        </li>
                        <!-- <li class="signin"><a class="loginbox various" href="#" data-ref="#">Log in</a></li> -->
                        <!-- <li class="signup"><a class="signupbox various" href="#" data-ref="#">Sign up</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
