<?php

    echo "Decimal : ";
    var_dump(1234);

    echo "Oktal : ";
    var_dump(01234);

    echo "Hexadesimal : ";
    var_dump(0x1A);

    echo "Binary : ";
    var_dump(0b111111);

    echo "Underscore in number : ";
    var_dump(1_241_234_765);

    echo "floating point : ";
    var_dump(1.234);

    echo "floating point denagn E notation : (1.7 x 1000 : ";
    var_dump(1.7e3);

    echo "floating point denagn E notation minus: (1.7 x 0.001 : ";
    var_dump(1.7e-3);

    echo "Underscore in floating point : ";
    var_dump(1_123.123);

    echo "Interger Overflow : ";
    var_dump(9223372036854775808);