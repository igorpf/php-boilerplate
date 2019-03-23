<?php

return [
    Example\IPersonService::class => DI\get(Example\PersonService::class),
    Example\IPersonDB::class => DI\get(Example\PersonDB::class)
];