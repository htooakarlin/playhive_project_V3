// window.addEventListener('DOMContentLoaded', event => {
//     const datatablesSimple = document.getElementById('datatablesSimple');
//     if (datatablesSimple) {
//         const dataTable = new simpleDatatables.DataTable(datatablesSimple);

//         // Function to attach click events to rows
//         const attachRowClickListeners = () => {
//             const rows = datatablesSimple.querySelectorAll('tbody tr');
//             rows.forEach(row => {
//                 row.addEventListener('click', () => {
//                     // Remove 'selected-row' class from all rows
//                     rows.forEach(r => r.classList.remove('custom_table_selected'));
                    
//                     // Add 'selected-row' class to the clicked row
//                     row.classList.add('custom_table_selected');
//                 });
//             });
//         };

//         // Attach listeners after the table initializes
//         dataTable.on('datatable.init', () => {
//             attachRowClickListeners();
//         });

//         // Reapply listeners after table updates (search, pagination, etc.)
//         dataTable.on('datatable.update', () => {
//             attachRowClickListeners();
//         });

//         dataTable.on('datatable.page', () => {
//             attachRowClickListeners();
//         });
//     }
// });