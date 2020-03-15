<?php

/**
 * Competitions Model
 *
 * @package Core
 * @author  Steve Ball <steve@follyball.co.uk>
 * @copyright Copyright (c) 2017 Steve Ball <steve@follyball.co.uk>
 */

// Include the initiation file
require_once '../src/init.php';


class  M_Common
{
    public function __construct($p=null) {

    } //__construct ()

    protected function base_colors() {
        return [
            'Black'=>'000000',
            'Blue'=>'0000FF',
            'Brown'=>'A52A2A',
            'Cyan'=>'00FFFF',
            'Gray'=>'808080',
            'Green'=>'008000',
            'Magenta'=>'FF00FF',
            'Maroon'=>'800000',
            'Orange'=>'FFA500',
            'Pink'=>'FFC0CB',
            'Purple'=>'800080',
            'Red'=>'FF0000',
            'Turquoise'=>'40E0D0',
            'Violet'=>'EE82EE',
            'White'=>'FFFFFF',
            'Yellow'=>'FFFF00',
        ];
    }
    protected function extra_colors() {
        return [
            'AliceBlue'=>'F0F8FF',
            'AntiqueWhite'=>'FAEBD7',
            'Aqua'=>'00FFFF',
            'Aquamarine'=>'7FFFD4',
            'Azure'=>'F0FFFF',
            'Beige'=>'F5F5DC',
            'Bisque'=>'FFE4C4',
            'BlanchedAlmond '=>'FFEBCD',
            'BlueViolet'=>'8A2BE2',
            'Burlywood'=>'DEB887',
            'Cadetblue'=>'5F9EA0',
            'Chartreuse'=>'7FFF00',
            'Chocolate'=>'D2691E',
            'Coral'=>'FF7F50',
            'CornflowerBlue'=>'6495ED',
            'Cornsilk'=>'FFF8DC',
            'Crimson'=>'DC143C',
            'DarkBlue'=>'00008B',
            'DarkCyan'=>'008B8B',
            'DarkGoldenrod'=>'B8860B',
            'DarkGray'=>'A9A9A9',
            'DarkGreen'=>'006400',
            'DarkKhaki'=>'BDB76B',
            'DarkMagenta'=>'8B008B',
            'DarkOliveGreen'=>'556B2F',
            'DarkOrange'=>'FF8C00',
            'DarkOrchid'=>'9932CC',
            'Darkred'=>'8B0000',
            'DarkSalmon'=>'E9967A',
            'DarkSeaGreen'=>'8FBC8F',
            'DarkSlateBlue'=>'483D8B',
            'DarkSlateGray'=>'2F4F4F',
            'DarkTurquoise'=>'00CED1',
            'DarkViolet'=>'9400D3',
            'DeepPink'=>'FF1493',
            'DeepSkyBlue'=>'00BFFF',
            'Dimgray'=>'696969',
            'Dodgerblue'=>'1E90FF',
            'Firebrick'=>'B22222',
            'FloralWhite'=>'FFFAF0',
            'ForestGreen'=>'228B22',
            'Fuchsia'=>'FF00FF',
            'Gainsboro'=>'DCDCDC',
            'GhostWhite'=>'F8F8FF',
            'Gold'=>'FFD700',
            'Goldenrod'=>'DAA520',
            'GreenYellow'=>'ADFF2F',
            'Grey'=>'808080',
            'Honeydew'=>'F0FFF0',
            'HotPink'=>'FF69B4',
            'IndianRed'=>'CD5C5C',
            'Indigo'=>'4B0082',
            'Ivory'=>'FFFFF0',
            'Khaki'=>'F0E68C',
            'Lavender'=>'E6E6FA',
            'LavenderBlush'=>'FFF0F5',
            'LawnGreen'=>'7CFC00',
            'LemonChiffon'=>'FFFACD',
            'Lightblue'=>'ADD8E6',
            'Lightcoral'=>'F08080',
            'Lightcyan'=>'E0FFFF',
            'Lightgoldenrodyellow'=>'FAFAD2',
            'Lightgray'=>'D3D3D3',
            'Lightgreen'=>'90EE90',
            'Lightpink'=>'FFB6C1',
            'LightSalmon'=>'FFA07A',
            'LightSeaGreen'=>'20B2AA',
            'LightSkyBlue'=>'87CEFA',
            'LightSlateGray'=>'778899',
            'LightSteelBlue'=>'B0C4DE',
            'LightYellow'=>'FFFFE0',
            'Lime'=>'00FF00',
            'LimeGreen'=>'32CD32',
            'Linen'=>'FAF0E6',
            'mediumaquamarine'=>'66CDAA',
            'mediumblue'=>'0000CD',
            'mediumorchid'=>'BA55D3',
            'mediumpurple'=>'9370D0',
            'mediumseagreen'=>'3CB371',
            'mediumslateblue'=>'7B68EE',
            'mediumspringgreen'=>'00FA9A',
            'mediumturquoise'=>'48D1CC',
            'mediumvioletred'=>'C71585',
            'midnightblue'=>'191970',
            'mintcream'=>'F5FFFA',
            'mistyrose'=>'FFE4E1',
            'moccasin'=>'FFE4B5',
            'navajowhite'=>'FFDEAD',
            'navy'=>'000080',
            'oldlace'=>'FDF5E6',
            'olive'=>'808000',
            'olivedrab'=>'6B8E23',
            'orangered'=>'FF4500',
            'orchid'=>'DA70D6',
            'palegoldenrod'=>'EEE8AA',
            'palegreen'=>'98FB98',
            'paleturquoise'=>'AFEEEE',
            'palevioletred'=>'DB7093',
            'papayawhip'=>'FFEFD5',
            'peachpuff'=>'FFDAB9',
            'peru'=>'CD853F',
            'plum'=>'DDA0DD',
            'powderblue'=>'B0E0E6',
            'rosybrown'=>'BC8F8F',
            'royalblue'=>'4169E1',
            'saddlebrown'=>'8B4513',
            'salmon'=>'FA8072',
            'sandybrown'=>'F4A460',
            'seagreen'=>'2E8B57',
            'seashell'=>'FFF5EE',
            'sienna'=>'A0522D',
            'silver'=>'C0C0C0',
            'skyblue'=>'87CEEB',
            'slateblue'=>'6A5ACD',
            'slategray'=>'708090',
            'snow'=>'FFFAFA',
            'springgreen'=>'00FF7F',
            'steelblue'=>'4682B4',
            'tan'=>'D2B48C',
            'teal'=>'008080',
            'thistle'=>'D8BFD8',
            'tomato'=>'FF6347',
            'wheat'=>'F5DEB3',
            'whitesmoke'=>'F5F5F5',
            'yellowgreen'=>'9ACD32'
        ];
    }


}
