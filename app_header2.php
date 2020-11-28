<?php

session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Meat Traceability</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="shortcut icon" type="image/jpg" href="assets/images/anime.png"/>

    <style type="text/css">
        
        .app-wrapper-footer{
             position: fixed;
              left: 0;
              bottom: 0;
              width: 100%;
              text-align: center;
        }
    </style>
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="view_user_profile.php">
                                            <button type="button" tabindex="0" class="dropdown-item">View Profile</button>
                                            </a>
                                            <a href="edit_user_profile.php">
                                            <button type="button" tabindex="0" class="dropdown-item">Edit Profile</button>
                                            </a>
                                            <a href="logout.php">
                                           <button type="button" tabindex="0" class="dropdown-item">Logout</button>
                                           </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                       <?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?>
                                    </div>
                                    <div class="widget-subheading">
                                        <?php echo $_SESSION['user_role']; ?>
                                        <?php if($_SESSION["user_role"] == 'district_official'): ?>
                                           - <b><?php echo $_SESSION["district_name"]; ?></b>
                                        <?php endif; ?>
                                    </div>
                                    

                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            
        </div>        
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                       
                    <div class="scrollbar-sidebar" style="overflow: scroll;">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="dashboard.php" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard 
                                    </a>
                                </li>
                                
                                <li class="app-sidebar__heading">ABBATTOIR</li>
                                
                                
                                <ul>
                                <?php if($_SESSION['user_role'] == 'government_official' || $_SESSION['user_role'] == 'super_admin'): ?>
                                <li>
                                    <a href="abattoirs.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Arbattoirs
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if($_SESSION['user_role'] == 'government_official' || $_SESSION['user_role'] == 'super_admin'): ?>
                                <li>
                                    <a href="abattoir_records.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Arbattoir Records
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if($_SESSION['user_role'] == 'abattoir_officer'): ?>
                                <li>
                                    <a href="officer_abattoir_records.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Arbattoir Records
                                    </a>
                                </li>
                                <li>
                                    <a href="add_abattoir_records.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Add Arbattoir Records
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if($_SESSION['user_role'] == 'district_official'): ?>
                                <li>
                                    <a href="district_abattoir_records.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Arbattoir Records
                                    </a>
                                </li>
                                <?php endif; ?>
                                </ul>
                                </li>
                                
                                </li>
                                

                                
                               
                                <?php if($_SESSION['user_role'] == 'super_Admin'): ?>
                                   <li class="app-sidebar__heading">Account</li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon pe-7s-car"></i>
                                            Users
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="add_user.php">
                                                    <i class="metismenu-icon">
                                                    </i>Add User
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="users_list.php">
                                                    <i class="metismenu-icon">
                                                    </i>Users List
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            </ul>

                                
                        </div>
                    </div>
                </div>
       
                 