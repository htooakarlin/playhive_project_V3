@extends('layouts.adminApp');

@section('content')
    <div class="container-fluid px-4">
        <div class="card mb-4 custom_table_header">
            <div class="card-body custom_table_header_nav">
                <h3><b>Admin Table</b></h3>
                <div class="custom_table_btn_area">
                    <a href="#editAdminModel" class="btn edit_btn" id="adminEditBtn">Edit</a>
					<a href="#deleteAdminModal" class="btn btn-danger" id="adminDeleteBtn">Delete</a>
                    {{-- <button class="btn edit_btn">Edit</button>
                    <button class="btn btn-danger">Delete</button> --}} 
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <table id="adminTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Type</th>
                            <th>Start date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Type</th>
                            <th>Start date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr class="selected" data-id="1">
                            <td>Htoo Akar Lin</td>
                            <td>wefwfrw</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                        </tr>
                        <tr data-id="2">
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                        </tr>
                        <tr data-id="3">
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                        </tr>
                        <tr data-id="4">
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                        </tr>
                        <tr data-id="5">
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                        </tr>
                        <tr data-id="6">
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                        </tr>
                        <tr data-id="7">
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                        </tr>
                        <tr data-id="8">
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                        </tr>
                        <tr data-id="9">
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                        </tr>
                        <tr data-id="10">
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                        </tr>
                        <tr data-id="11">
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                        </tr>
                        <tr data-id="12">
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                        </tr>
                        <tr data-id="13">
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="editAdminModel" class="modal fade" tabindex="-1" aria-labelledby="editAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">						
                        <h4 class="modal-title">Edit Admin</h4>
                        <button type="button" class="btn-close custom_btn_close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select id="custom_type">
                                <option value="volvo">Admin</option>
                                <option value="saab">User</option>
                            </select>
                        </div>					
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn custom_btn_add" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteAdminModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">						
                        <h4 class="modal-title">Delete Admin</h4>
                        <button type="button" class="btn-close custom_btn_close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">					
                        <p>Are you sure you want to delete this Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="warningAdminModel" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">						
                        <h4 class="modal-title">Warning</h4>
                        <button type="button" class="btn-close custom_btn_close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">					
                        <p>Please select a row to edit or delete. </p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn custom_btn_add" data-bs-dismiss="modal" value="Ok">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection

<script>
    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('adminTable');
        const editBtn = document.getElementById('adminEditBtn');
        const deleteBtn = document.getElementById('adminDeleteBtn');

        const warningModal = new bootstrap.Modal(document.getElementById('warningAdminModel'));
        const editModal = new bootstrap.Modal(document.getElementById('editAdminModel'));
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteAdminModal'));

        const rowsCheck = datatablesSimple.querySelectorAll('tbody tr');

        // Function to attach click events to rows
        const attachRowClickListeners = () => {
            const rows = datatablesSimple.querySelectorAll('tbody tr');
            rows.forEach(row => {
                row.addEventListener('click', () => {
                    // Remove 'selected-row' class from all rows
                    rows.forEach(r => r.classList.remove('custom_table_selected'));
                    
                    // Add 'selected-row' class to the clicked row
                    row.classList.add('custom_table_selected');
                });
            });

            editBtn.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent modal from opening
                const selectedRow = datatablesSimple.querySelector('.custom_table_selected');
                if (!selectedRow) {
                    warningModal.show();
                } else {
                    editModal.show();
                }
            });

            deleteBtn.addEventListener('click', (event) => {
                event.preventDefault();
                const selectedRow = datatablesSimple.querySelector('.custom_table_selected');
                if(!selectedRow){
                    warningModal.show();
                }else{
                    deleteModal.show();
                }
            })
        };

        if (datatablesSimple) {
            const dataTable = new simpleDatatables.DataTable(datatablesSimple);

            dataTable.on('datatable.init', () => {
                attachRowClickListeners();
            });

            dataTable.on('datatable.update', () => {
                attachRowClickListeners();
            });

            dataTable.on('datatable.page', () => {
                attachRowClickListeners();
            });
        }
    });
</script>