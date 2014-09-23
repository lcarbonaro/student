<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tabs & Datatables Example</title>

        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/themes/cupertino/jquery-ui.css" />
        
        <link rel="stylesheet" href="css/bootstrap.css " />
        <link rel="stylesheet" href="css/dataTables.bootstrap.css " />        

    </head>
    <body>
        <div class="container pull-left">  <!-- bootstrap container -->

        <div id="divMainTabs" class="ui-tabs">

            <!-- tab list -->
            <ul class="ui-tabs-nav" role="tablist">
                <li role="tab" tabindex="0" class="ui-state-default ui-tabs-active ui-state-active">
                    <a class="ui-tabs-anchor" role="presentation" href="#divMainTabs-1" id="ui-id-1">TabOne</a>
                </li>
                <li role="tab" tabindex="-1" class="ui-state-default">
                    <a class="ui-tabs-anchor" role="presentation" href="#divMainTabs-2" id="ui-id-2">TabDeux</a>
                </li>
                <li role="tab" tabindex="-1" class="ui-state-default">
                    <a class="ui-tabs-anchor" role="presentation" href="#divMainTabs-3" id="ui-id-3">TabTheThird</a>
                </li>
                <!-- new tabs go here
                <li id="liCloseable" role="tab" tabindex="-1" class="ui-state-default">
                    <a class="ui-tabs-anchor" role="presentation" href="#divMainTabs-4" id="ui-id-4">Fab4</a><span class='ui-icon ui-icon-close' role='presentation'></span>
                </li>
                -->
            </ul>

            <!-- tab panels -->
            <div id="divMainTabs-1" class="ui-tabs-panel" role="tabpanel">
                <table id="tblData" class="table table-condensed table-bordered table-responsive table-hover table-striped">
                    <thead>
                        <tr>
                            <td>Some Heading</td>
                            <td>Col2</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>00row</td><td>00row</td></tr>
                        <tr><td>01row</td><td>01row</td></tr>
                        <tr><td>02row</td><td>02row</td></tr>
                        <tr><td>03row</td><td>03row</td></tr>
                        <tr><td>04row</td><td>04row</td></tr>
                        <tr><td>05row</td><td>05row</td></tr>
                        <tr><td>06row</td><td>06row</td></tr>
                        <tr><td>07row</td><td>07row</td></tr>
                        <tr><td>08row</td><td>08row</td></tr>
                        <tr><td>09row</td><td>09row</td></tr>   
                        <tr><td>10row</td><td>10row</td></tr>
                        <tr><td>11row</td><td>11row</td></tr>
                        <tr><td>12row</td><td>12row</td></tr>
                        <tr><td>13row</td><td>13row</td></tr>
                        <tr><td>14row</td><td>14row</td></tr>
                        <tr><td>15row</td><td>15row</td></tr>
                        <tr><td>16row</td><td>16row</td></tr>
                        <tr><td>17row</td><td>17row</td></tr>
                        <tr><td>18row</td><td>18row</td></tr>
                        <tr><td>19row</td><td>19row</td></tr>   
                        <tr><td>20row</td><td>20row</td></tr>
                        <tr><td>21row</td><td>21row</td></tr>
                        <tr><td>22row</td><td>22row</td></tr>
                        <tr><td>23row</td><td>23row</td></tr>
                        <tr><td>24row</td><td>24row</td></tr>
                        <tr><td>25row</td><td>25row</td></tr>
                        <tr><td>26row</td><td>26row</td></tr>
                        <tr><td>27row</td><td>27row</td></tr>
                        <tr><td>28row</td><td>28row</td></tr>
                        <tr><td>29row</td><td>29row</td></tr>   				
                        <tr><td>30row</td><td>30row</td></tr>
                        <tr><td>31row</td><td>31row</td></tr>
                        <tr><td>32row</td><td>32row</td></tr>
                        <tr><td>33row</td><td>33row</td></tr>
                        <tr><td>34row</td><td>34row</td></tr>
                        <tr><td>35row</td><td>35row</td></tr>
                        <tr><td>36row</td><td>36row</td></tr>
                        <tr><td>37row</td><td>37row</td></tr>
                        <tr><td>38row</td><td>38row</td></tr>
                        <tr><td>39row</td><td>39row</td></tr>   
                        <tr><td>40row</td><td>40row</td></tr>
                        <tr><td>41row</td><td>41row</td></tr>
                        <tr><td>42row</td><td>42row</td></tr>
                        <tr><td>43row</td><td>43row</td></tr>
                        <tr><td>44row</td><td>44row</td></tr>
                        <tr><td>45row</td><td>45row</td></tr>
                        <tr><td>46row</td><td>46row</td></tr>
                        <tr><td>47row</td><td>47row</td></tr>
                        <tr><td>48row</td><td>48row</td></tr>
                        <tr><td>49row</td><td>49row</td></tr>   				
                        <tr><td>50row</td><td>50row</td></tr>
                        <tr><td>51row</td><td>51row</td></tr>
                        <tr><td>52row</td><td>52row</td></tr>
                        <tr><td>53row</td><td>53row</td></tr>
                        <tr><td>54row</td><td>54row</td></tr>
                        <tr><td>55row</td><td>55row</td></tr>
                        <tr><td>56row</td><td>56row</td></tr>
                        <tr><td>57row</td><td>57row</td></tr>
                        <tr><td>58row</td><td>58row</td></tr>
                        <tr><td>59row</td><td>59row</td></tr>   
                        <tr><td>60row</td><td>60row</td></tr>
                        <tr><td>61row</td><td>61row</td></tr>
                        <tr><td>62row</td><td>62row</td></tr>
                        <tr><td>63row</td><td>63row</td></tr>
                        <tr><td>64row</td><td>64row</td></tr>
                        <tr><td>65row</td><td>65row</td></tr>
                        <tr><td>66row</td><td>66row</td></tr>
                        <tr><td>67row</td><td>67row</td></tr>
                        <tr><td>68row</td><td>68row</td></tr>
                        <tr><td>69row</td><td>69row</td></tr>   
                        <tr><td>70row</td><td>70row</td></tr>
                        <tr><td>71row</td><td>71row</td></tr>
                        <tr><td>72row</td><td>72row</td></tr>
                        <tr><td>73row</td><td>73row</td></tr>
                        <tr><td>74row</td><td>74row</td></tr>
                        <tr><td>75row</td><td>75row</td></tr>
                        <tr><td>76row</td><td>76row</td></tr>
                        <tr><td>77row</td><td>77row</td></tr>
                        <tr><td>78row</td><td>78row</td></tr>
                        <tr><td>79row</td><td>79row</td></tr>   
                        <tr><td>80row</td><td>80row</td></tr>
                        <tr><td>81row</td><td>81row</td></tr>
                        <tr><td>82row</td><td>82row</td></tr>
                        <tr><td>83row</td><td>83row</td></tr>
                        <tr><td>84row</td><td>84row</td></tr>
                        <tr><td>85row</td><td>85row</td></tr>
                        <tr><td>86row</td><td>86row</td></tr>
                        <tr><td>87row</td><td>87row</td></tr>
                        <tr><td>88row</td><td>88row</td></tr>
                        <tr><td>89row</td><td>89row</td></tr>   
                        <tr><td>90row</td><td>90row</td></tr>
                        <tr><td>91row</td><td>91row</td></tr>
                        <tr><td>92row</td><td>92row</td></tr>
                        <tr><td>93row</td><td>93row</td></tr>
                        <tr><td>94row</td><td>94row</td></tr>
                        <tr><td>95row</td><td>95row</td></tr>
                        <tr><td>96row</td><td>96row</td></tr>
                        <tr><td>97row</td><td>97row</td></tr>
                        <tr><td>98row</td><td>98row</td></tr>
                        <tr><td>99row</td><td>99row</td></tr>   				                          				             
                    </tbody>
                </table>
            </div>

            <div id="divMainTabs-2" class="ui-tabs-panel" role="tabpanel" style="display:none;">                
                <table id="tblData2" class="table table-condensed table-bordered table-responsive table-hover table-striped">
                    <thead>
                        <tr>
                            <td>Column Heading</td>
                            <td>Another Column</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>00row2</td><td>00row2</td></tr>
                        <tr><td>01row2</td><td>01row2</td></tr>
                        <tr><td>02row2</td><td>02row2</td></tr>
                        <tr><td>03row2</td><td>03row2</td></tr>
                        <tr><td>04row2</td><td>04row2</td></tr>
                        <tr><td>05row2</td><td>05row2</td></tr>
                        <tr><td>06row2</td><td>06row2</td></tr>
                        <tr><td>07row2</td><td>07row2</td></tr>
                        <tr><td>08row2</td><td>08row2</td></tr>
                        <tr><td>09row2</td><td>09row2</td></tr>   
                        <tr><td>10row2</td><td>10row2</td></tr>
                        <tr><td>11row2</td><td>11row2</td></tr>
                        <tr><td>12row2</td><td>12row2</td></tr>
                        <tr><td>13row2</td><td>13row2</td></tr>
                        <tr><td>14row2</td><td>14row2</td></tr>
                        <tr><td>15row2</td><td>15row2</td></tr>
                        <tr><td>16row2</td><td>16row2</td></tr>
                        <tr><td>17row2</td><td>17row2</td></tr>
                        <tr><td>18row2</td><td>18row2</td></tr>
                        <tr><td>19row2</td><td>19row2</td></tr>   
                        <tr><td>20row2</td><td>20row2</td></tr>
                        <tr><td>21row2</td><td>21row2</td></tr>
                        <tr><td>22row2</td><td>22row2</td></tr>
                        <tr><td>23row2</td><td>23row2</td></tr>
                        <tr><td>24row2</td><td>24row2</td></tr>
                        <tr><td>25row2</td><td>25row2</td></tr>
                        <tr><td>26row2</td><td>26row2</td></tr>
                        <tr><td>27row2</td><td>27row2</td></tr>
                        <tr><td>28row2</td><td>28row2</td></tr>
                        <tr><td>29row2</td><td>29row2</td></tr>   	
                    </tbody>
                </table>                
            </div>

            <div id="divMainTabs-3" class="ui-tabs-panel" role="tabpanel" style="display:none;">
                <p>This is a much simpler table, no sorting, no pagination, no search</p>

                <table id="tblData3" class="table table-condensed table-bordered table-responsive table-hover table-striped">
                    <thead>
                        <tr>
                            <td>First Column</td>
                            <td>Second Column</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>00row2</td><td>00row2</td></tr>
                        <tr><td>01row2</td><td>01row2</td></tr>
                        <tr><td>02row2</td><td>02row2</td></tr>
                        <tr><td>03row2</td><td>03row2</td></tr>
                        <tr><td>04row2</td><td>04row2</td></tr>
                        <tr><td>05row2</td><td>05row2</td></tr>
                        <tr><td>06row2</td><td>06row2</td></tr>
                        <tr><td>07row2</td><td>07row2</td></tr>
                        <tr><td>08row2</td><td>08row2</td></tr>
                        <tr><td>09row2</td><td>09row2</td></tr>   
                        <tr><td>10row2</td><td>10row2</td></tr>
                        <tr><td>11row2</td><td>11row2</td></tr>
                        <tr><td>12row2</td><td>12row2</td></tr>
                        <tr><td>13row2</td><td>13row2</td></tr>
                        <tr><td>14row2</td><td>14row2</td></tr>
                        <tr><td>15row2</td><td>15row2</td></tr>
                        <tr><td>16row2</td><td>16row2</td></tr>
                        <tr><td>17row2</td><td>17row2</td></tr>
                        <tr><td>18row2</td><td>18row2</td></tr>
                        <tr><td>19row2</td><td>19row2</td></tr>   
                        <tr><td>20row2</td><td>20row2</td></tr>
                        <tr><td>21row2</td><td>21row2</td></tr>
                        <tr><td>22row2</td><td>22row2</td></tr>
                        <tr><td>23row2</td><td>23row2</td></tr>
                        <tr><td>24row2</td><td>24row2</td></tr>
                        <tr><td>25row2</td><td>25row2</td></tr>
                        <tr><td>26row2</td><td>26row2</td></tr>
                        <tr><td>27row2</td><td>27row2</td></tr>
                        <tr><td>28row2</td><td>28row2</td></tr>
                        <tr><td>29row2</td><td>29row2</td></tr>   	
                    </tbody>
                </table>                 
            </div>

            <!-- new tab panels go here
            <div id="divMainTabs-4" class="ui-tabs-panel" role="tabpanel" style="display:none;">
                <p>Sub-tabs</p>

                <div id="divSubTabs" class="ui-tabs">

                    <ul class="ui-tabs-nav" role="tablist">
                        <li role="tab" tabindex="0" class="ui-state-default ui-tabs-active ui-state-active">
                            <a class="ui-tabs-anchor" role="presentation" href="#divSubTabs-1" id="ui-id-sub1">John</a>
                        </li>
                        <li role="tab" tabindex="-1" class="ui-state-default">
                            <a class="ui-tabs-anchor" role="presentation" href="#divSubTabs-2" id="ui-id-sub2">Paul</a>
                        </li>
                        <li role="tab" tabindex="-1" class="ui-state-default">
                            <a class="ui-tabs-anchor" role="presentation" href="#divSubTabs-3" id="ui-id-sub3">George</a>
                        </li>
                        <li role="tab" tabindex="-1" class="ui-state-default">
                            <a class="ui-tabs-anchor" role="presentation" href="#divSubTabs-4" id="ui-id-sub4">Ringo</a>
                        </li>
                    </ul>

                    <div id="divSubTabs-1" class="ui-tabs-panel" role="tabpanel" >
                        <p>Lennon</p>
                    </div>
                    <div id="divSubTabs-2" class="ui-tabs-panel" role="tabpanel" style="display:none;">
                        <p>McCartney</p>
                    </div>
                    <div id="divSubTabs-3" class="ui-tabs-panel" role="tabpanel" style="display:none;">
                        <p>Harrison</p>
                    </div>
                    <div id="divSubTabs-4" class="ui-tabs-panel" role="tabpanel" style="display:none;">
                        <p>Starr</p>
                    </div>

                </div>

            </div>
            -->

        </div>   
        
        </div>   <!-- bootstrap container  -->

        <!-- 3rd party JS libraries -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui-1.10.3.js"></script>
        <script src="js/DataTables-1.9.4/media/js/jquery.dataTables.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>

        <!-- Custom JS -->
        <script>
            $(document).ready(function() {
                //console.log("jQ ready");

                var oTabs = $('#divMainTabs').tabs();

                var oSubTabs = $('#divSubTabs').tabs();

                var oTable = $('#tblData').dataTable({
                    "bJQueryUI": true,
                    "sScrollY": "400px",
                    "bPaginate": false,
                    "bScrollCollapse": true,
                    "bAutoWidth": true
                });

                var oTable2 = $('#tblData2').dataTable({
                    "bJQueryUI": true,
                    "bPaginate": true,
                    "bAutoWidth": true
                });

                var oTable3 = $('#tblData3').dataTable({
                    "bJQueryUI": true,
                    "bPaginate": false,
                    "bAutoWidth": true,
                    "bSort": false,
                    "sDom": '<lr>t<"F">'

                });

                // close tab on click
                oTabs.delegate("span.ui-icon-close", "click", function() {
                    var panel = $(this).closest("li").remove();
                    $("#" + panel.attr('id')).remove();
                    oTabs.tabs("refresh");
                });

            });
        </script>

    </body>
</html>


