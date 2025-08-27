<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'functions.php';

$recordsPerPageOptions = getConfig('recordsPerPageOptions', [5, 10, 15, 20]);
$recordsPerPageDefault = getConfig('recordsPerPage', 10);
$recordsPerPage = getParam('recordsPerPage', $recordsPerPageDefault);
$search = getParam('search', '');

require_once 'views/top.php';
require_once 'views/nav.php';
?>
<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
        <h1>USER MANAGEMENT SYSTEM</h1>
        <?php
        $page = $_SERVER['PHP_SELF'];
        $action = getParam('action');
        switch ($action) {

            default:
                $orderByColumns = getConfig('orderByColumns', []);
                $orderBy = getParam('orderBy', 'id');
                $orderDir = getParam('orderDir', 'ASC');
                if (!in_array($orderDir, ['ASC', 'DESC'])) {
                    $orderDir = 'DESC';
                }
                // $orderBy = in_array($orderBy, $orderByColumns) ? $orderBy : 'id';
                $recordsPerPage = getConfig('recordsPerPage', 10);
                $params = [
                    'orderBy' => $orderBy,
                    'recordsPerPage' => $recordsPerPage,
                    'orderDir' => $orderDir,
                    'search' => $search
                ];
                $users = getUsers($params);
                $orderDir = ($orderDir === 'ASC') ? 'DESC' : 'ASC';
                // dd($orderBy);
                // $params = ['oerderBy' => $orderBy, 'recordsPerPage' => $recordsPerPage];

                require 'views/userList.php';
                break;
        }
        ?>
    </div>
</main>
<script src="/js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>

<?php
require_once 'views/footer.php';
?>