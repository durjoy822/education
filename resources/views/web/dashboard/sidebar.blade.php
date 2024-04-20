<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa
    }

    p {
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999
    }

    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s
    }

    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1)
    }

    .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none
    }

    .line {
        width: 100%;
        height: 1px;
        /* border-bottom: 1px dashed #ddd */
    }

    .wrapper {
        height: 600px;
        margin-top: 120px;
        display: flex;
        width: 100%;
        align-items: stretch
    }

    #sidebar {
        background: #005086;
        min-width: 250px;
        max-width: 250px;
        transition: all 0.3s;
        color: white;
    }

    #sidebar.active {
        margin-left: -250px
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #005086
        /* background: #fc9928; */
    }

    #sidebar ul.components {
        padding: 20px 0px;
        /* border-bottom: 1px solid #47748b */
    }

    #sidebar ul p {
        padding: 10px;
        font-size: 15px;
        display: block;
        color: #fff
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block
    }

    #sidebar ul li a:hover {
        color: #fff;
        background: #318fb5
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;

        background: #318fb5}a[data-toggle="collapse"] {
            position: relative
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%)
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #318fb5
        }

        ul.CTAs {
            padding: 20px
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px
        }

        a.download,
        a.download:hover {
            background: #318fb5;
            color: #fff
        }

        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s
        }

        .content-wrapper {
            /* padding: 15px */
            padding-top: 73px;
        }

        @media(maz-width:768px) {
            #sidebar {
                margin-left: -250px
            }

            #sidebar.active {
                margin-left: 0px
            }

            #sidebarCollapse span {
                display: none
            }
        }
</style>
<nav id="sidebar" class="pt-5">
    <div class="sidebar-header text-center">
        <div> <img src="https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=1539" class="rounded-circle" style="height: 100px ; width:100px" alt="Cinque Terre"></div>
        <span>{{ Auth::guard('student')->user()->name }}</span>
        </div>
    <ul class="list-unstyled components p-0 ">
        <li> <a href="#" > Dashboard</a></li>
        <li> <a href="#" >Wishlist 12</a></li>
        <li> <a href="#" >Settings</a></li>
        <li> <a href="#" >Change Password</a></li>
        <li> <a href="{{route('student.logout')}}" >logout</a></li>
    </ul>
</nav>

