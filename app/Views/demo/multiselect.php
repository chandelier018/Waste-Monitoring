<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=hmq-qYfl-umfJ8eEzawRUQtWSjwsBOLq5wGFxF6U9EgU9n4D9sGq03WohifnKcuDr9aVUDR6fdQGLSXkWS0-vJzJ1IBffRPZBLWjC8h-flA" charset="UTF-8"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
    <!-- Select2 plugin -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <!-- Select2 plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <meta charset=utf-8 />
    <!--
Created using JS Bin
http://live.datatables.net

Copyright (c) 2021 by anonymous (http://live.datatables.net/xehexoye/888/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
    <title>DataTables - JS Bin</title>

    <style id="jsbin-css">
        body {
            font: 90%/1.45em "Helvetica Neue", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <table id="example" class="display nowrap" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>

            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$3,120</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Director</td>
                    <td>Edinburgh</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$5,300</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$4,800</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$3,600</td>
                </tr>
                <tr>
                    <td>Jenna Elliott</td>
                    <td>Financial Controller</td>
                    <td>Edinburgh</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$5,300</td>
                </tr>
                <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td>$4,525</td>
                </tr>
                <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td>$4,080</td>
                </tr>
                <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Edinburgh</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td>$6,730</td>
                </tr>
                <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td>$5,000</td>
                </tr>
                <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td>$3,600</td>
                </tr>
                <tr>
                    <td>Jena Gaines</td>
                    <td>System Architect</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td>$5,000</td>
                </tr>
                <tr>
                    <td>Quinn Flynn</td>
                    <td>Financial Controller</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$4,200</td>
                </tr>
                <tr>
                    <td>Charde Marshall</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>2008/10/16</td>
                    <td>$5,300</td>
                </tr>
                <tr>
                    <td>Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>43</td>
                    <td>2012/12/18</td>
                    <td>$4,800</td>
                </tr>
                <tr>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>19</td>
                    <td>2010/03/17</td>
                    <td>$2,875</td>
                </tr>
                <tr>
                    <td>Michael Silva</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>66</td>
                    <td>2012/11/27</td>
                    <td>$3,750</td>
                </tr>
                <tr>
                    <td>Paul Byrd</td>
                    <td>Javascript Developer</td>
                    <td>New York</td>
                    <td>64</td>
                    <td>2010/06/09</td>
                    <td>$5,000</td>
                </tr>
                <tr>
                    <td>Gloria Little</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>59</td>
                    <td>2009/04/10</td>
                    <td>$3,120</td>
                </tr>
                <tr>
                    <td>Bradley Greer</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>41</td>
                    <td>2012/10/13</td>
                    <td>$3,120</td>
                </tr>
                <tr>
                    <td>Dai Rios</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>35</td>
                    <td>2012/09/26</td>
                    <td>$4,200</td>
                </tr>
                <tr>
                    <td>Jenette Caldwell</td>
                    <td>Financial Controller</td>
                    <td>New York</td>
                    <td>30</td>
                    <td>2011/09/03</td>
                    <td>$4,965</td>
                </tr>
                <tr>
                    <td>Yuri Berry</td>
                    <td>System Architect</td>
                    <td>New York</td>
                    <td>40</td>
                    <td>2009/06/25</td>
                    <td>$3,600</td>
                </tr>
                <tr>
                    <td>Caesar Vance</td>
                    <td>Technical Author</td>
                    <td>New York</td>
                    <td>21</td>
                    <td>2011/12/12</td>
                    <td>$4,965</td>
                </tr>
                <tr>
                    <td>Doris Wilder</td>
                    <td>Sales Assistant</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2010/09/20</td>
                    <td>$4,965</td>
                </tr>
                <tr>
                    <td>Angelica Ramos</td>
                    <td>System Architect</td>
                    <td>London</td>
                    <td>36</td>
                    <td>2009/10/09</td>
                    <td>$2,875</td>
                </tr>
                <tr>
                    <td>Gavin Joyce</td>
                    <td>Developer</td>
                    <td>Edinburgh</td>
                    <td>42</td>
                    <td>2010/12/22</td>
                    <td>$4,525</td>
                </tr>
                <tr>
                    <td>Jennifer Chang</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>28</td>
                    <td>2010/11/14</td>
                    <td>$4,080</td>
                </tr>
                <tr>
                    <td>Brenden Wagner</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>18</td>
                    <td>2011/06/07</td>
                    <td>$3,750</td>
                </tr>
                <tr>
                    <td>Ebony Grimes</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>48</td>
                    <td>2010/03/11</td>
                    <td>$2,875</td>
                </tr>
                <tr>
                    <td>Russell Chavez</td>
                    <td>Director</td>
                    <td>Edinburgh</td>
                    <td>20</td>
                    <td>2011/08/14</td>
                    <td>$3,600</td>
                </tr>
                <tr>
                    <td>Michelle House</td>
                    <td>Integration Specialist</td>
                    <td>Edinburgh</td>
                    <td>37</td>
                    <td>2011/06/02</td>
                    <td>$3,750</td>
                </tr>
                <tr>
                    <td>Suki Burks</td>
                    <td>Developer</td>
                    <td>London</td>
                    <td>53</td>
                    <td>2009/10/22</td>
                    <td>$2,875</td>
                </tr>
                <tr>
                    <td>Prescott Bartlett</td>
                    <td>Technical Author</td>
                    <td>London</td>
                    <td>27</td>
                    <td>2011/05/07</td>
                    <td>$6,730</td>
                </tr>
                <tr>
                    <td>Gavin Cortez</td>
                    <td>Technical Author</td>
                    <td>San Francisco</td>
                    <td>22</td>
                    <td>2008/10/26</td>
                    <td>$6,730</td>
                </tr>
                <tr>
                    <td>Martena Mccray</td>
                    <td>Integration Specialist</td>
                    <td>Edinburgh</td>
                    <td>46</td>
                    <td>2011/03/09</td>
                    <td>$4,080</td>
                </tr>
                <tr>
                    <td>Unity Butler</td>
                    <td>Senior Marketing Designer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/12/09</td>
                    <td>$3,750</td>
                </tr>
                <tr>
                    <td>Howard Hatfield</td>
                    <td>Financial Controller</td>
                    <td>San Francisco</td>
                    <td>51</td>
                    <td>2008/12/16</td>
                    <td>$4,080</td>
                </tr>
                <tr>
                    <td>Hope Fuentes</td>
                    <td>Financial Controller</td>
                    <td>San Francisco</td>
                    <td>41</td>
                    <td>2010/02/12</td>
                    <td>$4,200</td>
                </tr>
                <tr>
                    <td>Vivian Harrell</td>
                    <td>System Architect</td>
                    <td>San Francisco</td>
                    <td>62</td>
                    <td>2009/02/14</td>
                    <td>$4,965</td>
                </tr>
                <tr>
                    <td>Timothy Mooney</td>
                    <td>Financial Controller</td>
                    <td>London</td>
                    <td>37</td>
                    <td>2008/12/11</td>
                    <td>$4,200</td>
                </tr>
                <tr>
                    <td>Jackson Bradshaw</td>
                    <td>Director</td>
                    <td>New York</td>
                    <td>65</td>
                    <td>2008/09/26</td>
                    <td>$5,000</td>
                </tr>
                <tr>
                    <td>Miriam Weiss</td>
                    <td>Support Engineer</td>
                    <td>Edinburgh</td>
                    <td>64</td>
                    <td>2011/02/03</td>
                    <td>$4,965</td>
                </tr>
                <tr>
                    <td>Bruno Nash</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>38</td>
                    <td>2011/05/03</td>
                    <td>$4,200</td>
                </tr>
                <tr>
                    <td>Odessa Jackson</td>
                    <td>Support Engineer</td>
                    <td>Edinburgh</td>
                    <td>37</td>
                    <td>2009/08/19</td>
                    <td>$3,600</td>
                </tr>
                <tr>
                    <td>Thor Walton</td>
                    <td>Developer</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2013/08/11</td>
                    <td>$3,600</td>
                </tr>
                <tr>
                    <td>Finn Camacho</td>
                    <td>Support Engineer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/07/07</td>
                    <td>$4,800</td>
                </tr>
                <tr>
                    <td>Elton Baldwin</td>
                    <td>Data Coordinator</td>
                    <td>Edinburgh</td>
                    <td>64</td>
                    <td>2012/04/09</td>
                    <td>$6,730</td>
                </tr>
                <tr>
                    <td>Zenaida Frank</td>
                    <td>Software Engineer</td>
                    <td>New York</td>
                    <td>63</td>
                    <td>2010/01/04</td>
                    <td>$4,800</td>
                </tr>
                <tr>
                    <td>Zorita Serrano</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>56</td>
                    <td>2012/06/01</td>
                    <td>$5,300</td>
                </tr>
                <tr>
                    <td>Jennifer Acosta</td>
                    <td>Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>43</td>
                    <td>2013/02/01</td>
                    <td>$2,875</td>
                </tr>
                <tr>
                    <td>Cara Stevens</td>
                    <td>Sales Assistant</td>
                    <td>New York</td>
                    <td>46</td>
                    <td>2011/12/06</td>
                    <td>$4,800</td>
                </tr>
                <tr>
                    <td>Hermione Butler</td>
                    <td>Director</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2011/03/21</td>
                    <td>$4,080</td>
                </tr>
                <tr>
                    <td>Lael Greer</td>
                    <td>Systems Administrator</td>
                    <td>London</td>
                    <td>21</td>
                    <td>2009/02/27</td>
                    <td>$3,120</td>
                </tr>
                <tr>
                    <td>Jonas Alexander</td>
                    <td>Developer</td>
                    <td>San Francisco</td>
                    <td>30</td>
                    <td>2010/07/14</td>
                    <td>$5,300</td>
                </tr>
                <tr>
                    <td>Shad Decker</td>
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>51</td>
                    <td>2008/11/13</td>
                    <td>$5,300</td>
                </tr>
                <tr>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>29</td>
                    <td>2011/06/27</td>
                    <td>$4,080</td>
                </tr>
                <tr>
                    <td>Donna Snider</td>
                    <td>System Architect</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td>$3,120</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                initComplete: function() {
                    count = 0;
                    this.api().columns().every(function() {
                        var title = this.header();
                        //replace spaces with dashes
                        title = $(title).html().replace(/[\W]/g, '-');
                        var column = this;
                        var select = $('<select id="' + title + '" class="select2" ></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                //Get the "text" property from each selected data 
                                //regex escape the value and store in array
                                var data = $.map($(this).select2('data'), function(value, key) {
                                    return value.text ? '^' + $.fn.dataTable.util.escapeRegex(value.text) + '$' : null;
                                });

                                //if no data selected use ""
                                if (data.length === 0) {
                                    data = [""];
                                }

                                //join array into string with regex or (|)
                                var val = data.join('|');

                                //search for the option(s) selected
                                column
                                    .search(val ? val : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });

                        //use column title as selector and placeholder
                        $('#' + title).select2({
                            multiple: true,
                            closeOnSelect: false,
                            placeholder: "Select a " + title
                        });

                        //initially clear select otherwise first option is selected
                        $('.select2').val(null).trigger('change');
                    });
                }
            });
        });
    </script>
</body>

</html>