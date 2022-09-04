
<div class="header-social">
    <li <? echo ($page == 1) ? "class='active'" : "" ?>>
        <a href="index.php?page=1">About</a>
    </li>
    <li <? echo ($page == 2) ? "class='active'" : "" ?>>
        <a href="index.php?page=2">Product</a>
    </li>
    <li <? echo ($page == 3) ? "class='active'" : "" ?>>
        <a href="index.php?page=3">Contact</a>
    </li>
    <input class="header-search" type="search" placeholder="Search...">

    <li <? echo ($page == 4) ? "class='active'" : "" ?>>
        <a href="index.php?page=4">
            <img src="img/icon-like.svg" alt="icon-like">
        </a>
    </li>
    <li class="basket" <? echo ($page === 5) ? "class='active'" : "" ?> >
        <a href="index.php?page=5">
            <img class="ml-34px" src="img/icon-basket.svg" alt="icon-basket">
        </a>
    </li>

</div>
<button class="header-reg" type="submit" name="regbtn" <? echo ($page == 6) ? "class='active'" : ""?>>Registration</button>
<button class="header-reg" type="submit" name="logbtn">Log in</button>

