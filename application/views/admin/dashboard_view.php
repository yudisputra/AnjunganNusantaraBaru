<!-- Content -->
<div class="columns dashboard-columns">
    <!-- Tile -->
    <div class="column is-3">
        <div class="flex-card card-overflow light-bordered light-raised">
            <div class="icon-header">
                <i class="material-icons primary">account_balance_wallet</i>
            </div>
            <div class="content">
                <div class="card-title is-tile has-text-right">
                    Sales
                    <div class="card-stat primary has-text-right">284 <span class="stat-type">this month</span></div>
                </div>
            </div>
            <div class="more">
                <a class="primary" href="#">See all</a>
            </div>
        </div>
    </div>
    <!-- Tile -->
    <div class="column is-3">
        <div class="flex-card card-overflow light-bordered light-raised">
            <div class="icon-header">
                <i class="material-icons primary">account_balance</i>
            </div>
            <div class="content">
                <div class="card-title is-tile has-text-right">
                    Account
                    <div class="card-stat primary has-text-right"><span class="stat-type">$</span> 122 839,49</div>
                </div>
            </div>
            <div class="more">
                <a class="primary" href="#">Open</a>
            </div>
        </div>
    </div>
    <!-- Tile -->
    <div class="column is-3">
        <div class="flex-card card-overflow light-bordered light-raised">
            <div class="icon-header">
                <i class="material-icons secondary">work</i>
            </div>
            <div class="content">
                <div class="card-title is-tile has-text-right">
                    Deals
                    <div class="card-stat secondary has-text-right">14 <span class="stat-type">pending</span></div>
                </div>
            </div>
            <div class="more">
                <a class="secondary" href="#">See all</a>
            </div>
        </div>
    </div>
    <!-- Tile -->
    <div class="column is-3">
        <div class="flex-card card-overflow light-bordered light-raised">
            <div class="icon-header">
                <i class="material-icons secondary">business</i>
            </div>
            <div class="content">
                <div class="card-title is-tile has-text-right">
                    Leads
                    <div class="card-stat secondary has-text-right">53 <span class="stat-type">new leads</span></div>
                </div>
            </div>
            <div class="more">
                <a class="secondary" href="#">See all</a>
            </div>
        </div>
    </div>
</div>
<!-- /Content -->

<!-- Widgets -->
<div class="columns dashboard-columns">           
    <div class="column is-4">
        <!-- Widget -->
        <div id="linechart-card" class="flex-card light-bordered card-overflow light-raised">
            <h3 class="card-heading is-absolute">Sales Report</h3>
            <div class="header-control ml-auto is-drop drop-sm">
                <i class="sl sl-icon-arrow-down"></i>
                <div class="dropContain">
                    <div class="dropOut">
                        <ul>
                            <li><i class="drop-icon sl sl-icon-refresh"></i> Reload</li>
                            <li><i class="drop-icon sl sl-icon-printer"></i> Print</li>
                            <li><i class="drop-icon sl sl-icon-settings"></i> Settings</li>
                        </ul>
                    </div>
                </div>
            </div>
            <canvas id="lineChart" width="400" height="300"></canvas>
        </div>
        <!-- /Widget -->

        <!-- Widget -->
        <div class="flex-card is-squared light-bordered light-raised card-overflow has-text-centered">
            <div class="material-header is-secondary has-text-centered">
                <h3> Sales income</h3>
                <span class="widget-bars">5,3,9,6,5,9,7,3,5,16,5,7,2,8,6,4,8,2,5,6,8,9</span>
            </div>
            <div class="card-body has-text-centered">
                <div class="stat-text">
                    <div class="stat-average">
                        <span>$</span><span>118 595,49</span>
                    </div>
                    <div class="stat-subtitle">
                        Average sales per month
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widget -->
        
        <!-- /Widget -->
        <div class="flex-card is-squared light-bordered light-raised padding-30 has-text-centered">
            <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="140" height="140" xmlns="http://www.w3.org/2000/svg">
                <circle class="circle-chart-background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                <circle class="circle-chart-circle" stroke="#7F00FF" stroke-width="2" stroke-dasharray="68,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
            </svg>
            <div class="chart-avatar">
                <img src="https://place-hold.it/250x250" alt="">
            </div>
            <div class="ring-title has-text-centered">
                <span>68% Deals Won</span>
            </div>
        </div>
        <!-- /Widget -->
    </div>

    <div class="column is-4">
        <!-- Widget -->
        <div id="vmap-container" class="flex-card light-bordered card-overflow light-raised">
            <!--div id="geochart-colors"></div-->
            <div id="vmap"></div>
        </div>
        <!-- /Widget -->

        <!-- Widget -->
        <div class="flex-card is-squared light-bordered light-raised card-overflow has-text-centered">
            <div class="material-header is-primary has-text-centered">
                <h3> Activity stream</h3>
                <span class="widget-lines">5,3,9,6,5,9,7,3,5,16,5,7,2,8,6,4,8,2,5,6,8,9</span>
            </div>
            <div class="card-body has-text-centered">
                <div class="stat-text">
                    <div class="stat-average">
                        <span></span><span>543</span>
                    </div>
                    <div class="stat-subtitle">
                        Average comments per month
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widget -->

        <!-- Widget -->
        <div id="doughnut-card" class="flex-card light-bordered card-overflow light-raised">
            <h3 class="card-heading is-absolute">Task progress</h3>
            <div class="header-control ml-auto is-drop drop-sm">
                <i class="sl sl-icon-arrow-down"></i>
                <div class="dropContain">
                    <div class="dropOut">
                        <ul>
                            <li><i class="drop-icon sl sl-icon-refresh"></i> Refresh</li>
                            <li><i class="drop-icon sl sl-icon-check"></i> My tasks</li>
                            <li><i class="drop-icon sl sl-icon-rocket"></i> All projects</li>
                        </ul>
                    </div>
                </div>
            </div>
            <canvas id="doughnutChart" width="150" height="150"></canvas>
            <div class="has-text-centered mt-50">
                <a class="button btn-dash secondary-btn btn-dash is-raised rounded ripple" data-ripple-color="">See all tasks</a>
            </div>
        </div>
        <!-- /Widget -->
    </div>

    <div class="column is-4">
        <!-- Widget -->
        <div class="flex-card light-bordered light-raised padding-10">
            <h3 class="card-heading">Members</h3>
            <ul class="user-list">
                <li>
                    <div class="user-list-avatar">
                        <img src="https://place-hold.it/250x250" alt="">
                    </div>
                    <div class="user-list-info">
                        <div class="name">Terry Daniels</div>
                        <div class="position">CEO</div>
                    </div>
                    <div class="user-list-status is-online"></div>
                </li>
                <li>
                    <div class="user-list-avatar">
                        <img src="https://place-hold.it/250x250" alt="">
                    </div>
                    <div class="user-list-info">
                        <div class="name">Marjory Cambell</div>
                        <div class="position">CFO</div>
                    </div>
                    <div class="user-list-status is-busy"></div>
                </li>
                <li>
                    <div class="user-list-avatar">
                        <img src="https://place-hold.it/250x250" alt="">
                    </div>
                    <div class="user-list-info">
                        <div class="name">Kevin Smith</div>
                        <div class="position">Software Engineer</div>
                    </div>
                    <div class="user-list-status is-offline"></div>
                </li>
                <li>
                    <div class="user-list-avatar">
                        <img src="https://place-hold.it/250x250" alt="">
                    </div>
                    <div class="user-list-info">
                        <div class="name">Melany Wright</div>
                        <div class="position">Sales Manager</div>
                    </div>
                    <div class="user-list-status is-online"></div>
                </li>
                <li>
                    <div class="user-list-avatar">
                        <img src="https://place-hold.it/250x250" alt="">
                    </div>
                    <div class="user-list-info">
                        <div class="name">Helen Miller</div>
                        <div class="position">Sales Manager</div>
                    </div>
                    <div class="user-list-status is-online"></div>
                </li>
            </ul>
        </div>
        <!-- /Widget -->
        
        <!-- Widget -->
        <div class="flex-card light-bordered light-raised padding-10">
            <h3 class="card-heading">Activity feed</h3>
            <div class="header-control ml-auto is-drop drop-sm">
                <i class="sl sl-icon-arrow-down"></i>
                <div class="dropContain">
                    <div class="dropOut">
                        <ul>
                            <li><i class="drop-icon sl sl-icon-refresh"></i> Refresh</li>
                            <li><i class="drop-icon sl sl-icon-user"></i> My activity</li>
                            <li><i class="drop-icon sl sl-icon-people"></i> All activity</li>
                        </ul>
                    </div>
                </div>
            </div>
            <ol class="simple-feed">
                <!-- Feed item -->
                <li class="feed-item">
                    <div class="feed-item-text">
                        <span class="date">2 minutes ago</span>
                        <span class="text"><span class="name">Henry Rodstein</span> sent you a Message.</span>
                    </div>
                </li>
                <!-- Feed item -->
                <li class="feed-item">
                    <div class="feed-item-text">
                        <span class="date">3 hours ago</span>
                        <span class="text">You have 5 new messages.</span>
                    </div>
                </li>
                <!-- Feed item -->
                <li class="feed-item">
                    <div class="feed-item-text">
                        <span class="date">5 hours ago</span>
                        <span class="text"><span class="name">Marjory Cambell</span> is now following you.</span>
                    </div>
                </li>
                <!-- Feed item -->
                <li class="feed-item">
                    <div class="feed-item-text">
                        <span class="date">Yesterday</span>
                        <span class="text">You have 3  invoices pending.</span>
                    </div>
                </li>
                <!-- Feed item -->
                <li class="feed-item">
                    <div class="feed-item-text">
                        <span class="date">Monday</span>
                        <span class="text"><span class="name">Eleanor Briggs</span> liked your Post.</span>
                    </div>
                </li>
                <!-- Feed item -->
                <li class="feed-item">
                    <div class="feed-item-text">
                        <span class="date">Last week</span>
                        <span class="text"><span class="name">Kevin Smith</span> added a Project.</span>
                    </div>
                </li>
            </ol>
        </div>
        <!-- /Widget -->
    </div>
</div>
<!-- /Widgets -->