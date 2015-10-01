<?
session_start();
$ok = false;
if (isset($_SESSION['chave_sm_team'])) {
    if (isset($_SESSION['email']) AND isset($_SESSION['papel'])) {
        $chave_sm_team = sha1($_SESSION['email'] . $_SESSION['papel']);
        if ($_SESSION['chave_sm_team'] != $chave_sm_team) {
            session_destroy();
            header("location: index.php");
            exit;
        } else {
            foreach ($papeis as $papel) {
                if ($papel == $_SESSION['papel']) {
                    $ok = true;
                    break;
                }
            }
            if (!$ok) {
                session_destroy();
                header("location: ../index.php");
            } else {
                if(!include '/service/Conexao.php'){
                    include '../service/Conexao.php';
                }
                if(!include '/cabecalho.php'){
                    include '../cabecalho.php';
                }
                if(!include '/models/models.php'){
                    include '../models/models.php';
                }
                if(!include '/dao/daos.php'){
                    include '../dao/daos.php';
                }
                if(!include 'service/Util.php'){
                    include '../service/Util.php';
                }
            }
        }
    } else {
        header("location: index.php");
        exit;
    }
} else {
    header("location: index.php");
    exit;
}
?>