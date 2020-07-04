<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
Admin GreenEarth        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{"admin"}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./user.html">
                    <i class="material-icons">person</i>
                    <p>{{Auth::user()->__get("name")}}</p>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="{{"list-category"}}">
                    <i class="material-icons">content_paste</i>
                    <p>List Category</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{"new-category"}}">
                    <i class="material-icons">library_books</i>
                    <p>New Category</p>
                </a>
            </li>
{{--            Organizations--}}
            <li class="nav-item  ">
                <a class="nav-link" href="{{"list-organize"}}">
                    <i class="material-icons">content_paste</i>
                    <p>List Organize</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{"new-organize"}}">
                    <i class="material-icons">library_books</i>
                    <p>New Organize</p>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="{{"list-event"}}">
                    <i class="material-icons">content_paste</i>
                    <p>List Event</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{"new-event"}}">
                    <i class="material-icons">library_books</i>
                    <p>New Event</p>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="{{"list-article"}}">
                    <i class="material-icons">content_paste</i>
                    <p>List Article</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{"new-article"}}">
                    <i class="material-icons">library_books</i>
                    <p>New Article</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
            <!-- <li class="nav-item active-pro ">
                  <a class="nav-link" href="./upgrade.html">
                      <i class="material-icons">unarchive</i>
                      <p>Upgrade to PRO</p>
                  </a>
              </li> -->
        </ul>
    </div>
</div>
