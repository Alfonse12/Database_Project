<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-tagert=".navbar-exl-collapse">

      <span class="sr-only"> Toggle Navigation </span>

      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <a href="index.php?dashboard" class="navbar-brand"> Admin Area</a>
  </div>

  <ul class="nav navbar-right top-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i> M-Alfonse <b class="caret"></b>
      </a>

      <ul class="dropdown-menu">
          <li>
            <a href="index.php?user_profile">
              <li class="fa fa-fw fa-user"></li> Profile
            </a>
        </li>

          <li>
            <a href="index.php?view_products">
              <li class="fa fa-fw fa-envelope"></li> Products
              <span class="badge">2</span>
            </a>
        </li>

        <li>
          <a href="index.php?view_customents">
            <i class="fa fa-fw fa-users"></i> Customers
            <span class="badge">5</span>
          </a>
        </li>

        <li>
          <a href="index.php?view_cats">
            <i class="fa fa-fw fa-gear"></i> Product Categories
            <span class="badge">6</span>
          </a>
        </li>

          <li>
            <a href="index.php?view_cats">
              <i class="fa fa-fw fa-power-off"></i> Log Out
            </a>
        </li>
      </ul>

    </li>
  </ul>

  <div class="collapse navbar-collapse navbar-exl-collapse">
    <ul class="nav navbar-nav side-nav">
      <li>
        <a href="index.php?dashboard">
        <i class="fa fa fa-dashboard"></i> Dashboard
        </a>
      </li>

      <li>
        <a href="#" data-toggle="collapse" data-tagert="#products">
            <i class="fa fa-fw fa-tag"></i> Products
            <i class="fa fa-fw fa-caret-down"> </i>
        </a>

        <ul id="products" class="collapse">
          <li>
            <a href="index.php?insert_product">Insert Product </a>
            <a href="index.php?view_product">View Product </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#" data-toggle="collapse" data-tagert="#products">
            <i class="fa fa-fw fa-edit"></i> Product Categories
            <i class="fa fa-fw fa-caret-down"></i>
        </a>

        <ul id="products" class="collapse">
          <li>
            <a href="index.php?insert_p_cat">Insert Product Category </a>
            <a href="index.php?view_product">View Product Categories </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="index.php?view_customers" data-toggle="collapse" data-tagert="#products">
            <i class="fa fa-fw fa-users"></i> View Customers
        </a>

        <ul id="products" class="collapse">
          <li>
            <a href="index.php?insert_p_cat">Insert Category </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="index.php?view_customers" data-toggle="collapse" data-tagert="#products">
            <i class="fa fa-fw fa-book"></i> View Oders
        </a>

        <li>
          <a href="index.php?view_customers" data-toggle="collapse" data-tagert="#products">
              <i class="fa fa-fw fa-money"></i> View Payments
          </a>

        </li>
          <li>
            <a href="../logout.php" data-toggle="collapse" data-tagert="#products">
                <i class="fa fa-fw fa-power-off"></i> Log Out
            </a>
      </li>

    </ul>
  </div>
</div>
