@extends('layouts.masterAdmin')
@section('title', 'Dashboard')
@section('content')
        <h1 class="p-relative">Dashboard</h1>
        <div class="wrapper d-grid gap-20">
          <!-- Start Welcome Widget -->
          <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
            <div class="intro p-20 d-flex space-between bg-eee">
              <div>
                <h2 class="m-0">Welcome</h2>
                <p class="c-grey mt-5">{{ Auth::user()->name }}</p>
              </div>
              <img class="hide-mobile" src="../../imgs/welcome.png" alt="" />
            </div>
            <img src="../imgs/avatar.png" alt="" class="avatar" />
            <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
              <div>Osama Elzero <span class="d-block c-grey fs-14 mt-10">Developer</span></div>
              <div>80 <span class="d-block c-grey fs-14 mt-10">Projects</span></div>
              <div>$8500 <span class="d-block c-grey fs-14 mt-10">Earned</span></div>
            </div>
            <a href="profile.html" class="visit d-block fs-14 bg-blue c-white w-fit btn-shape">Profile</a>
          </div>
          <!-- End Welcome Widget -->
          <!-- Start Quick Draft Widget -->
          <div class="quick-draft p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Quick Draft</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Write A Draft For Your Ideas</p>
            <form>
              <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text" placeholder="Title" />
              <textarea class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" placeholder="Your Thought"></textarea>
              <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="Save" />
            </form>
          </div>
          <!-- End Quick Draft Widget -->
          <!-- Start End Media Stats Widget -->
        </div>
        <!-- Start Projects Table -->
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Projects</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Finish Date</td>
                  <td>Client</td>
                  <td>Price</td>
                  <td>Team</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Ministry Wikipedia</td>
                  <td>10 May 2022</td>
                  <td>Ministry</td>
                  <td>$5300</td>
                  <td>
                    <img src="../imgs/team-01.png" alt="" />
                    <img src="../imgs/team-02.png" alt="" />
                    <img src="../imgs/team-03.png" alt="" />
                    <img src="../imgs/team-05.png" alt="" />
                  </td>
                  <td>
                    <span class="label btn-shape bg-orange c-white">Pending</span>
                  </td>
                </tr>
                <tr>
                  <td>Elzero Shop</td>
                  <td>12 Oct 2021</td>
                  <td>Elzero Company</td>
                  <td>$1500</td>
                  <td>
                    <img src="../imgs/team-01.png" alt="" />
                    <img src="../imgs/team-02.png" alt="" />
                    <img src="../imgs/team-05.png" alt="" />
                  </td>
                  <td><span class="label btn-shape bg-blue c-white">In Progress</span></td>
                </tr>
                <tr>
                  <td>Bouba App</td>
                  <td>05 Sep 2021</td>
                  <td>Bouba</td>
                  <td>$800</td>
                  <td>
                    <img src="../imgs/team-02.png" alt="" />
                    <img src="../imgs/team-03.png" alt="" />
                  </td>
                  <td><span class="label btn-shape bg-green c-white">Completed</span></td>
                </tr>
                <tr>
                  <td>Mahmoud Website</td>
                  <td>22 May 2021</td>
                  <td>Mahmoud</td>
                  <td>$600</td>
                  <td>
                    <img src="../imgs/team-01.png" alt="" />
                    <img src="../imgs/team-02.png" alt="" />
                  </td>
                  <td><span class="label btn-shape bg-green c-white">Completed</span></td>
                </tr>
                <tr>
                  <td>Sayed Website</td>
                  <td>24 May 2021</td>
                  <td>Sayed</td>
                  <td>$300</td>
                  <td>
                    <img src="../imgs/team-01.png" alt="" />
                    <img src="../imgs/team-03.png" alt="" />
                  </td>
                  <td><span class="label btn-shape bg-red c-white">Rejected</span></td>
                </tr>
                <tr>
                  <td>Arena Application</td>
                  <td>01 Mar 2021</td>
                  <td>Arena Company</td>
                  <td>$2600</td>
                  <td>
                    <img src="../imgs/team-01.png" alt="" />
                    <img src="../imgs/team-02.png" alt="" />
                    <img src="../imgs/team-03.png" alt="" />
                    <img src="../imgs/team-04.png" alt="" />
                  </td>
                  <td><span class="label btn-shape bg-green c-white">Completed</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Projects Table -->
      </div>
    </div>
  </body>
</html>
@endsection
