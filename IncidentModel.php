
namespace App\Model;

use PDO;

class IncidentModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=incidents', 'root', '');
    }

    public function getAll() {
        $stmt = $this->db->query('SELECT * FROM incidents');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title, $description) {
        $stmt = $this->db->prepare("INSERT INTO incidents (title, description) VALUES (:title, :description)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
    }
}
