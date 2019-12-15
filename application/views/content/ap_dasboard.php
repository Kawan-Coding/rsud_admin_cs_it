<div class="card-body">
    <h5 class="card-title">Dashboard</h5>
    <div class="dropdown-divider"></div>
    <div class="row">
        <div class="col">
            <div class="shadow-sm btn-lg">
                <div class="card-body">
                    <h6 class="">Pelayanan Permintaan Hari Ini</h6>
                    <div class="text-white" id="list-dashboard">
                        <div>
                            <span class="btn btn-blue w-70">Unit IT</span>
                            <span class="btn btn-blue w-10 ml-3">25 </span>
                        </div>
                        <div>
                            <span class="btn btn-orange w-70">Unit IPS</span>
                            <span class="btn btn-orange w-10 ml-3">25 </span>
                        </div>
                        <div>
                            <span class="btn btn-pink w-70">Unit ITP</span>
                            <span class="btn btn-pink w-10 ml-3">25 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="shadow-sm btn-lg">
                <div class="card-body">
                    <h6 class="">Penanganan Permintaan Hari Ini</h6>
                    <div class="text-white " id="list-dashboard">
                        <div>
                            <span class="btn btn-blue w-10 ml-3">25 </span>
                            <span class="btn btn-blue w-70">Unit IT</span>
                        </div>
                        <div>
                            <span class="btn btn-orange w-10 ml-3">25 </span>
                            <span class="btn btn-orange w-70">Unit IPS</span>
                        </div>
                        <div>
                            <span class="btn btn-pink w-10 ml-3">25 </span>
                            <span class="btn btn-pink w-70">Unit ITP</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col">
    <div class="shadow-sm btn-lg mx-1 mb-5">
        <div class="card-body">
            <h6 class="">Laporan Aktifitas</h6>
            <select class="card btn mb-1">
                <option selected>Pilih Unit</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div id="statistik">
            </div>
            <script>
                window.onload = function() {

                    var chart = new CanvasJS.Chart("statistik", {
                        exportEnabled: true,
                        animationEnabled: true,
                        height: 260,
                        axisY: {
                            title: "Oil Filter - Units",
                            titleFontColor: "#4F81BC",
                            lineColor: "#4F81BC",
                            labelFontColor: "#4F81BC",
                            tickColor: "#4F81BC"
                        },
                        axisY2: {
                            title: "Clutch - Units",
                            titleFontColor: "#C0504E",
                            lineColor: "#C0504E",
                            labelFontColor: "#C0504E",
                            tickColor: "#C0504E"
                        },
                        toolTip: {
                            shared: true
                        },
                        legend: {
                            cursor: "pointer",
                            itemclick: toggleDataSeries
                        },
                        data: [{
                                type: "column",
                                name: "Oil Filter",
                                showInLegend: true,
                                yValueFormatString: "#,##0.# Units",
                                dataPoints: [{
                                        label: "New Jersey",
                                        y: 19034.5
                                    },
                                    {
                                        label: "Texas",
                                        y: 20015
                                    },
                                    {
                                        label: "Oregon",
                                        y: 25342
                                    },
                                    {
                                        label: "Montana",
                                        y: 20088
                                    },
                                    {
                                        label: "Massachusetts",
                                        y: 28234
                                    }
                                ]
                            },
                            {
                                type: "column",
                                name: "Clutch",
                                axisYType: "secondary",
                                showInLegend: true,
                                yValueFormatString: "#,##0.# Units",
                                dataPoints: [{
                                        label: "New Jersey",
                                        y: 210.5
                                    },
                                    {
                                        label: "Texas",
                                        y: 135
                                    },
                                    {
                                        label: "Oregon",
                                        y: 425
                                    },
                                    {
                                        label: "Montana",
                                        y: 130
                                    },
                                    {
                                        label: "Massachusetts",
                                        y: 528
                                    }
                                ]
                            }
                        ]
                    });
                    chart.render();

                    function toggleDataSeries(e) {
                        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else {
                            e.dataSeries.visible = true;
                        }
                        e.chart.render();
                    }

                }
            </script>
        </div>
    </div>
</div>