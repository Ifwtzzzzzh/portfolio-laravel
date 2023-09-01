import './bootstrap';
import 'flowbite';

import DataTable from 'datatables.net-dt';

let table = new DataTable('#myTable', {
    responsive: true
});

const allSkeleton = document.querySelectorAll('.animation-pulse')