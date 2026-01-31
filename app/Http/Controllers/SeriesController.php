namespace App\Http\Controllers;

class SeriesController
{
    public function ListarSeries()
    {
        $series = [
            "Friends",
            "Game of Thrones",
            "The Office"
        ];

        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>" . $serie . "</li>";
        }
        $html .= "</ul>";

        echo $html;
    }
}