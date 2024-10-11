<?php



namespace App\Service;
 
class Code
{
    public function display(): string
    {
       
        $html = '<table>';
        $html .= '<thead>';
        $html .= '<tr>';
        for ($i = 0; $i <= 10; $i++) {
            $html .= '<th>' . $i . '</th>';
        }
        $html .= '</tr>';
        $html .= '</thead>';
 
       
        $html .= '<tbody>';
        for ($i = 1; $i <= 10; $i++) {
            $html .= '<tr>';
            $html .= '<th>' . $i . '</th>';
            for ($j = 1; $j <= 10; $j++) {
                if ($i == $j) {
                    $html .= '<td>X</td>';
                } else {
                    $html .= '<td>' . ($i * $j) . '</td>';
                }
            }
            $html .= '</tr>';
        }
        $html .= '</tbody>';
 
        $html .= '</table>';
 
        return $html;
    }
}
    ?>