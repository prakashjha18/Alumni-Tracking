@extends('alumni.app')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
          <li class="breadcrumb-item active">Funding</li>
        <li class="breadcrumb-item">
          <a href="/alumnidashboard">Dashboard</a>
        </li>
        
        
      </ol>
       <!-- Example DataTables Card-->
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Alumni name</th>
                  <th>Position</th>
                  <th>College Name</th>
                  <th>Conventions Name</th>
                  <th>Transaction Amount</th>
                  <th>Transaction Year</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Alumni name</th>
                    <th>Position</th>
                    <th>College Name</th>
                    <th>Conventions Name</th>
                    <th>Transaction Date</th>
                    <th>Transaction Amount</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>Full Stack Developer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Codeless web designing</td>
                  <td>2012/12/02</td>
                  <td>$12,800</td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>Software Developer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on web designing</td>
                  <td>2012/12/02</td>
                  <td>$5000</td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Codeless Design Thinking</td>
                  <td>2012/12/02</td>
                  <td>$7500</td>
                </tr>
                <tr>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on ML</td>
                  <td>2012/12/02</td>
                  <td>$7845</td>
                </tr>
                <tr>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Data Science</td>
                  <td>2012/12/02</td>
                  <td>$4597</td>
                </tr>
                <tr>
                  <td>Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Embedded Systems</td>
                  <td>2012/12/02</td>
                  <td>$372,000</td>
                </tr>
                <tr>
                  <td>Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on ML</td>
                  <td>2012/08/06</td>
                  <td>$137,500</td>
                </tr>
                <tr>
                  <td>Rhona Davidson</td>
                  <td>Integration Specialist</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Data Science</td>
                  <td>2010/10/14</td>
                  <td>$327,900</td>
                </tr>
                <tr>
                  <td>Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Data Science</td>
                  <td>2009/09/15</td>
                  <td>$205,500</td>
                </tr>
                <tr>
                  <td>Sonya Frost</td>
                  <td>Software Engineer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Embedded Systems</td>
                  <td>2008/12/13</td>
                  <td>$103,600</td>
                </tr>
                <tr>
                  <td>Jena Gaines</td>
                  <td>Office Manager</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Embedded Systems</td>
                  <td>2008/12/19</td>
                  <td>$90,560</td>
                </tr>
                <tr>
                  <td>Quinn Flynn</td>
                  <td>Support Lead</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Codeless Design Thinking</td>
                  <td>2013/03/03</td>
                  <td>$342,000</td>
                </tr>
                <tr>
                  <td>Charde Marshall</td>
                  <td>Regional Director</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>36</td>
                  <td>2008/10/16</td>
                  <td>$Seminar on web designing0,600</td>
                </tr>
                <tr>
                  <td>Haley Kennedy</td>
                  <td>Senior Marketing Designer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on web designing</td>
                  <td>2012/12/18</td>
                  <td>$313,500</td>
                </tr>
                <tr>
                  <td>Tatyana Fitzpatrick</td>
                  <td>Regional Director</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>19</td>
                  <td>2010/03/17</td>
                  <td>$Seminar on Codeless Web Desgining5,750</td>
                </tr>
                <tr>
                  <td>Michael Silva</td>
                  <td>Marketing Designer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>66</td>
                  <td>2012/11/27</td>
                  <td>$198,500</td>
                </tr>
                <tr>
                  <td>Paul Byrd</td>
                  <td>Chief Financial Officer (CFO)</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>64</td>
                  <td>2010/06/09</td>
                  <td>$725,000</td>
                </tr>
                <tr>
                  <td>Gloria Little</td>
                  <td>Systems Administrator</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>59</td>
                  <td>2009/04/10</td>
                  <td>$Seminar on web designing7,500</td>
                </tr>
                <tr>
                  <td>Bradley Greer</td>
                  <td>Software Engineer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on codeless web designing</td>
                  <td>2012/10/13</td>
                  <td>$132,000</td>
                </tr>
                <tr>
                  <td>Dai Rios</td>
                  <td>Personnel Lead</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>35</td>
                  <td>2012/09/26</td>
                  <td>$Seminar on ML7,500</td>
                </tr>
                <tr>
                  <td>Jenette Caldwell</td>
                  <td>Development Lead</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Embedded Systems</td>
                  <td>2011/09/03</td>
                  <td>$345,000</td>
                </tr>
                <tr>
                  <td>Yuri Berry</td>
                  <td>Chief Marketing Officer (CMO)</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>40</td>
                  <td>2009/06/25</td>
                  <td>$675,000</td>
                </tr>
                <tr>
                  <td>Caesar Vance</td>
                  <td>Pre-Sales Support</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on ML</td>
                  <td>2011/12/12</td>
                  <td>$106,450</td>
                </tr>
                <tr>
                  <td>Doris Wilder</td>
                  <td>Sales Assistant</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on web designing</td>
                  <td>2010/09/20</td>
                  <td>$85,600</td>
                </tr>
                <tr>
                  <td>Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on web designing</td>
                  <td>2009/10/09</td>
                  <td>$1,200,000</td>
                </tr>
                <tr>
                  <td>Gavin Joyce</td>
                  <td>Developer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>42</td>
                  <td>2010/12/Seminar on Codeless Design Thinking</td>
                  <td>$92,575</td>
                </tr>
                <tr>
                  <td>Jennifer Chang</td>
                  <td>Regional Director</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Codeless Design Thinking</td>
                  <td>2010/11/14</td>
                  <td>$357,650</td>
                </tr>
                <tr>
                  <td>Brenden Wagner</td>
                  <td>Software Engineer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Codeless Design Thinking</td>
                  <td>2011/06/07</td>
                  <td>$206,850</td>
                </tr>
                <tr>
                  <td>Fiona Green</td>
                  <td>Chief Operating Officer (COO)</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>48</td>
                  <td>2010/03/11</td>
                  <td>$850,000</td>
                </tr>
                <tr>
                  <td>Shou Itou</td>
                  <td>Regional Marketing</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>20</td>
                  <td>2011/08/14</td>
                  <td>$163,000</td>
                </tr>
                <tr>
                  <td>Michelle House</td>
                  <td>Integration Specialist</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>37</td>
                  <td>2011/06/02</td>
                  <td>$95,400</td>
                </tr>
                <tr>
                  <td>Suki Burks</td>
                  <td>Developer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>53</td>
                  <td>2009/10/Seminar on Codeless Design Thinking</td>
                  <td>$114,500</td>
                </tr>
                <tr>
                  <td>Prescott Bartlett</td>
                  <td>Technical Author</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>27</td>
                  <td>2011/05/07</td>
                  <td>$145,000</td>
                </tr>
                <tr>
                  <td>Gavin Cortez</td>
                  <td>Team Leader</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Codeless Design Thinking</td>
                  <td>2008/10/26</td>
                  <td>$Seminar on web designing5,500</td>
                </tr>
                <tr>
                  <td>Martena Mccray</td>
                  <td>Post-Sales support</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on ML</td>
                  <td>2011/03/09</td>
                  <td>$324,050</td>
                </tr>
                <tr>
                  <td>Unity Butler</td>
                  <td>Marketing Designer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on web designing</td>
                  <td>2009/12/09</td>
                  <td>$85,675</td>
                </tr>
                <tr>
                  <td>Howard Hatfield</td>
                  <td>Office Manager</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>51</td>
                  <td>2008/12/16</td>
                  <td>$164,500</td>
                </tr>
                <tr>
                  <td>Hope Fuentes</td>
                  <td>Secretary</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on codeless web designing</td>
                  <td>2010/02/12</td>
                  <td>$109,850</td>
                </tr>
                <tr>
                  <td>Vivian Harrell</td>
                  <td>Financial Controller</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>62</td>
                  <td>2009/02/14</td>
                  <td>$452,500</td>
                </tr>
                <tr>
                  <td>Timothy Mooney</td>
                  <td>Office Manager</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>37</td>
                  <td>2008/12/11</td>
                  <td>$136,200</td>
                </tr>
                <tr>
                  <td>Jackson Bradshaw</td>
                  <td>Director</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>65</td>
                  <td>2008/09/26</td>
                  <td>$645,750</td>
                </tr>
                <tr>
                  <td>Olivia Liang</td>
                  <td>Support Engineer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>64</td>
                  <td>2011/02/03</td>
                  <td>$Seminar on web designing4,500</td>
                </tr>
                <tr>
                  <td>Bruno Nash</td>
                  <td>Software Engineer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Codeless Web Desgining</td>
                  <td>2011/05/03</td>
                  <td>$163,500</td>
                </tr>
                <tr>
                  <td>Sakura Yamamoto</td>
                  <td>Support Engineer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>37</td>
                  <td>2009/08/19</td>
                  <td>$139,575</td>
                </tr>
                <tr>
                  <td>Thor Walton</td>
                  <td>Developer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>61</td>
                  <td>2013/08/11</td>
                  <td>$98,540</td>
                </tr>
                <tr>
                  <td>Finn Camacho</td>
                  <td>Support Engineer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on web designing</td>
                  <td>2009/07/07</td>
                  <td>$87,500</td>
                </tr>
                <tr>
                  <td>Serge Baldwin</td>
                  <td>Data Coordinator</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>64</td>
                  <td>2012/04/09</td>
                  <td>$1Seminar on Codeless Web Desgining,575</td>
                </tr>
                <tr>
                  <td>Zenaida Frank</td>
                  <td>Software Engineer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>63</td>
                  <td>2010/01/04</td>
                  <td>$125,250</td>
                </tr>
                <tr>
                  <td>Zorita Serrano</td>
                  <td>Software Engineer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>56</td>
                  <td>2012/06/01</td>
                  <td>$115,000</td>
                </tr>
                <tr>
                  <td>Jennifer Acosta</td>
                  <td>Junior Javascript Developer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on web designing</td>
                  <td>2013/02/01</td>
                  <td>$75,650</td>
                </tr>
                <tr>
                  <td>Cara Stevens</td>
                  <td>Sales Assistant</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on ML</td>
                  <td>2011/12/06</td>
                  <td>$145,600</td>
                </tr>
                <tr>
                  <td>Hermione Butler</td>
                  <td>Regional Director</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on web designing</td>
                  <td>2011/03/Seminar on ML</td>
                  <td>$356,250</td>
                </tr>
                <tr>
                  <td>Lael Greer</td>
                  <td>Systems Administrator</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on ML</td>
                  <td>2009/02/27</td>
                  <td>$103,500</td>
                </tr>
                <tr>
                  <td>Jonas Alexander</td>
                  <td>Developer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>Seminar on Embedded Systems</td>
                  <td>2010/07/14</td>
                  <td>$86,500</td>
                </tr>
                <tr>
                  <td>Shad Decker</td>
                  <td>Regional Director</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>51</td>
                  <td>2008/11/13</td>
                  <td>$183,000</td>
                </tr>
                <tr>
                  <td>Michael Bruce</td>
                  <td>Javascript Developer</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>29</td>
                  <td>2011/06/27</td>
                  <td>$183,000</td>
                </tr>
                <tr>
                  <td>Donna Snider</td>
                  <td>Customer Support</td>
                  <td>Thakur College of Engineering and Technology</td>
                  <td>27</td>
                  <td>2011/01/25</td>
                  <td>$112,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
        </div>
      </div>
    </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Startup Igniter 2019</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ url('/admin/login') }}">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection