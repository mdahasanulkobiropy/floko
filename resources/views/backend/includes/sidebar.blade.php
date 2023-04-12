<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rukada</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>
                </li>
                <li> <a href="dashboard-eCommerce.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Hero Area</div>
            </a>
            <ul>
                <li> <a href="{{route('create.heros')}}"><i class="bx bx-right-arrow-alt"></i>Add Hero Details</a>
                </li>
                <li> <a href="{{route('index.heros')}}"><i class="bx bx-right-arrow-alt"></i>Show Hero Details</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Key Word Area</div>
            </a>
            <ul>
                <li> <a href="{{route('create.keywords')}}"><i class="bx bx-right-arrow-alt"></i>insert keyword</a>
                </li>
                <li> <a href="{{route('index.keywords')}}"><i class="bx bx-right-arrow-alt"></i>Show keyword</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Event Area</div>
            </a>
            <ul>
                <li> <a href="{{route('create.events')}}"><i class="bx bx-right-arrow-alt"></i>insert Event</a>
                </li>
                <li> <a href="{{route('index.events')}}"><i class="bx bx-right-arrow-alt"></i>Show Event</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Founder</div>
            </a>
            <ul>
                <li> <a href="{{route('create.founders')}}"><i class="bx bx-right-arrow-alt"></i>insert Founder</a>
                </li>
                <li> <a href="{{route('index.founders')}}"><i class="bx bx-right-arrow-alt"></i>Show Founder</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Title Speaker Area</div>
            </a>
            <ul>
                <li> <a href="{{route('create.tspeakers')}}"><i class="bx bx-right-arrow-alt"></i>insert Speakers</a>
                </li>
                <li> <a href="{{route('index.tspeakers')}}"><i class="bx bx-right-arrow-alt"></i>Show Speakers</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Speaker</div>
            </a>
            <ul>
                <li> <a href="{{route('create.speakers')}}"><i class="bx bx-right-arrow-alt"></i>insert Speakers</a>
                </li>
                <li> <a href="{{route('index.speakers')}}"><i class="bx bx-right-arrow-alt"></i>Show Speakers</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Schedule Download Area</div>
            </a>
            <ul>
                <li> <a href="{{route('create.dschedules')}}"><i class="bx bx-right-arrow-alt"></i>insert  </a>
                </li>
                <li> <a href="{{route('index.dschedules')}}"><i class="bx bx-right-arrow-alt"></i>Show </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Schedule List</div>
            </a>
            <ul>
                <li> <a href="{{route('create.schedules')}}"><i class="bx bx-right-arrow-alt"></i>insert  </a>
                </li>
                <li> <a href="{{route('index.schedules')}}"><i class="bx bx-right-arrow-alt"></i>Show </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Tickect Category</div>
            </a>
            <ul>
                <li> <a href="{{route('create.tickets')}}"><i class="bx bx-right-arrow-alt"></i>insert  </a>
                </li>
                <li> <a href="{{route('index.tickets')}}"><i class="bx bx-right-arrow-alt"></i>Show </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Tickect Facilitate</div>
            </a>
            <ul>
                <li> <a href="{{route('create.ftickets')}}"><i class="bx bx-right-arrow-alt"></i>insert  </a>
                </li>
                <li> <a href="{{route('index.ftickets')}}"><i class="bx bx-right-arrow-alt"></i>Show </a>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
