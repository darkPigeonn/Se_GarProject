<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SIA_Seminari</title>
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/adminBaru/bootstrap/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/adminBaru/css/styles.min.css'?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
</head>

<body>
   <strong style="background-color: #fffefe;color: rgb(8,8,8);font-size: 33px;">DATA SEMINARIS ST. VINCENTIUS A PAULO GARUM</strong>
    <!-- Start: Data Table with Search Sort Filter and Zoom using  -->
    <div class="container">
        <!-- Start: TableSorter -->
        <div class="card" id="TableSorterCard">
            <div class="row table-topper align-items-center" style="height: 46px;">
                <div class="col-4 text-left" style="margin: 0px;padding: 5px 15px;"><button class="btn btn-primary btn-sm reset" type="button" style="padding: 5px;margin: 2px;">RESET PENCARIAN</button><button class="btn btn-warning btn-sm" id="zoom_in" type="button" zoomclick="ChangeZoomLevel(-10);" style="padding: 5px;margin: 2px;"><i class="fa fa-search-plus"></i></button>
                    <button
                        class="btn btn-warning btn-sm" id="zoom_out" type="button" zoomclick="ChangeZoomLevel(-10);" style="padding: 5px;margin: 2px;"><i class="fa fa-search-minus"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div>
                        <table class="table table tablesorter" id="ipi-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">NO</th>
                                    <th class="text-center sorter-false">NAMA</th>
                                    <th class="text-center filter-false">ANGKATAN</th>
                                    <th class="text-center filter-false sorter-false">TAHUN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Atanasius Ivanoel</td>
                                    <td class="text-center">2014</td>
                                    <td class="text-center">2014/2015</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="btn-group" role="group"><button class="btn btn-primary bg-info border rounded border-dark" type="button" style="background-color: rgb(249,253,251);font-family: 'Archivo Black', sans-serif;margin: 10px;">TAMBAH DATA</button><button class="btn btn-primary bg-info border rounded border-dark"
                            type="button" style="font-family: 'Archivo Black', sans-serif;margin: 9px;background-color: rgb(245,247,246);">BACA DATAa&nbsp;</button><button class="btn btn-primary bg-info border rounded border-dark" type="button" style="font-family: 'Archivo Black', sans-serif;margin: 11px;background-color: rgb(248,249,249);">EDIT DATA</button>
                        <button
                            class="btn btn-primary text-center bg-info border rounded border-dark" type="button" style="font-family: 'Archivo Black', sans-serif;margin: 9px;background-color: rgb(245,247,246);">HAPUS DATA</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="tablehelpModal" aria-labeledby="tablehelpModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Table Filtering Options</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:1%">Priority</th>
                                            <th style="width:9%">Operator</th>
                                            <th style="width:30%">Description</th>
                                            <th style="width:60%">Examples</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><code>|</code>&nbsp;or&nbsp;&nbsp;<code>OR</code><br></td>
                                            <td>Logical "or" (Vertical bar). Filter the column for content that matches text from either side of the bar.<br></td>
                                            <td><code>&lt;20 | &gt;40</code>&nbsp;(matches a column cell with either "&lt;20" or "&gt;40")<br></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><code>&amp;&amp;</code>&nbsp;or <code>AND</code><br></td>
                                            <td>Logical "and". Filter the column for content that matches text from either side of the operator.<br></td>
                                            <td><code>&gt;20 &amp;&amp; &gt;40</code>&nbsp;(matches a column cell that contains both "&gt;20" and "&lt;40")<br></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><code>/\d/</code><br></td>
                                            <td>Add any regex to the query to use in the query ("mig" flags can be included&nbsp;<code>/\w/mig</code>)<br></td>
                                            <td><code>/b[aeiou]g/i</code>&nbsp;(finds "bag", "beg", "BIG", "Bug", etc);<code>&gt;/r$/</code>&nbsp;(matches text that ends with an "r")<br></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><code>&lt; &lt;= &gt;= &gt;</code><br></td>
                                            <td>Find alphabetical or numerical values less than or greater than or equal to the filtered query .<br></td>
                                            <td><code>&lt;=10</code>&nbsp;(find values greater than or equal to 10)<br></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><code>!</code>&nbsp;or&nbsp;<code>!=</code><br></td>
                                            <td>Not operator, or not exactly match. Filter the column with content that&nbsp;<strong>do not</strong>&nbsp;match the query. Include an equal (<code>=</code>), single (<code>'</code>) or double quote (<code>"</code>)
                                                to exactly&nbsp;<em>not</em>&nbsp;match a filter.<br><br><br></td>
                                            <td><code>!e</code>&nbsp;(find text that doesn't contain an "e");<code>!"ELISA"</code>&nbsp;(find content that does not exactly match "ELISA")<br></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td><code>"</code>&nbsp;or&nbsp;<code>=</code><br></td>
                                            <td>To exactly match the search query, add a quote, apostrophe or equal sign to the beginning and/or end of the query<br></td>
                                            <td><code>abc"</code>&nbsp;or&nbsp;<code>abc=</code>&nbsp;(exactly match "abc")<br></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td><code>-</code>&nbsp;or <code>to</code><br></td>
                                            <td>Find a range of values. Make sure there is a space before and after the dash (or the word "to").<br></td>
                                            <td><code>10 - 30</code>&nbsp;or&nbsp;<code>10 to 30</code>&nbsp;(match values between 10 and 30)<br></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td><code>?</code><br></td>
                                            <td>Wildcard for a single, non-space character.<br></td>
                                            <td><code>S?c</code>&nbsp;(finds "Sec" and "Soc", but not "Seec")<br></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td><code>*</code><br></td>
                                            <td>Wildcard for zero or more non-space characters.<br></td>
                                            <td><code>B*k</code>&nbsp;(matches "Black" and "Book")<br></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td><code>~</code><br></td>
                                            <td>Perform a fuzzy search (matches sequential characters) by adding a tilde to the beginning of the query<br></td>
                                            <td><code>~bee</code>&nbsp;(matches "Bruce Lee" and "Brenda Dexter"), or&nbsp;<code>~piano</code>&nbsp;(matches "Philip Aaron Wong")<br></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>text<br></td>
                                            <td>Any text entered in the filter will&nbsp;<strong>match</strong>&nbsp;text found within the column<br></td>
                                            <td><code>abc</code>&nbsp;(finds "abc", "abcd", "abcde", etc);<code>SEC</code>&nbsp;(finds "SEC" and "Analytical SEC")<br></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: TableSorter -->
    </div>
    <!-- End: Data Table with Search Sort Filter and Zoom using  -->
    <div class="btn-group" role="group"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/adminBaru/js/script.min.js')?>"></script>
</body>

</html>