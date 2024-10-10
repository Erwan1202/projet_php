namespace App\Controller;

use App\Model\IncidentModel;

class IncidentController {
    public function listIncidents() {
        $incidentModel = new IncidentModel();
        $incidents = $incidentModel->getAll();

        require_once __DIR__ . '/../../templates/list_incidents.php';
    }

    public function addIncident() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];

            $incidentModel = new IncidentModel();
            $incidentModel->create($title, $description);

            header('Location: /'); // Redirection vers la liste des incidents
        } else {
            require_once __DIR__ . '/../../templates/add_incident.php';
        }
    }
}
