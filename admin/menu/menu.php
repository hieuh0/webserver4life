<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="index.html">ADMIN-4life</a>
           </div>

           <ul class="nav navbar-top-links navbar-right">
               <li class="dropdown">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                   </a>
                   <ul class="dropdown-menu dropdown-user">
                       <li class="divider"></li>
                       <li>
                         <form action="" method="POST">
             <input type="submit" class="btn btn-info" name="btnthoat" id="btnthoat" value="Thoát"/>
             </form>
                       </li>
                   </ul>
               </li>
           </ul>

           <div class="navbar-default sidebar" role="navigation">
               <div class="sidebar-nav navbar-collapse">
                   <ul class="nav" id="side-menu">
                       <li class="sidebar-search">
                           <div class="input-group custom-search-form">
                               <input type="text" class="form-control" placeholder="Search...">
                               <span class="input-group-btn">
                                   <button class="btn btn-default" type="button">
                                       <i class="fa fa-search"></i>
                                   </button>
                               </span>
                           </div>

                       </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Danh Mục<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="danhsachdm.php">Danh Sach</a>
                                </li>
                                <li>
                                    <a href="#">Thêm</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Loại Danh Mục<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="danhsachloaidm.php">Danh Sách</a>
                              </li>
                              <li>
                                  <a href="danhsachloaidm.php?p=themloai">Thêm</a>
                              </li>
                          </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Sản Phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="danhsachsp.php">Danh Sách</a>
                                </li>
                                <li>
                                    <a href="danhsachsp.php?p=themsp">Thêm</a>
                                </li>
                                <li>
                                    <a href="danhsachsp.php?p=danhsachchitiet">Danh Sách Hình Chi Tiết</a>
                                </li>
                                <li>
                                    <a href="danhsachsp.php?p=themhinhchitiet">Thêm Hình Chi Tiết</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Thành Viên<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="danhsachtv.php">Danh Sách</a>
                                </li>
                                <li>
                                    <a href="#">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Hóa Đơn<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="danhsachhd.php">Danh Sách</a>
                                </li>
                                <li>
                                    <a href="#">Thêm</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> ADMIN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="danhsachadmin.php">Danh Sách</a>
                                </li>
                                <li>
                                    <a href="danhsachadmin.php?p=themad">Thêm</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Bình Luận<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="danhsachcomment.php">Danh Sách</a>
                                </li>
                                <li>
                                    <a href="#">Thêm</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Tin Tức<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="danhsachtin.php">Danh Sách</a>
                                </li>
                                <li>
                                    <a href="danhsachtin.php?p=themtin">Thêm</a>
                                </li>
                            </ul>
                        </li>
                   </ul>
               </div>
           </div>
       </nav>
