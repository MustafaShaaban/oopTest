$users = new Users;
$users->setFirstName($_POST['firstName']);
$users->setLastName($_POST['lastName']);
$users->setAge($_POST['age']);
$users->setUsername($_POST['username']);
$users->setEmail($_POST['email']);
$users->setPassword($_POST['password']);
$users->setjobTitle($_POST['position']);
$users->setSalary($_POST['salary']);
$users->setTax($_POST['tax']);

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')

$id = (isset($_GET['id']) && is_numeric($_GET['id'])) ? intval($_GET['id']) : 0;
