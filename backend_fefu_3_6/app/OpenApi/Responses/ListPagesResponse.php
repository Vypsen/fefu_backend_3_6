<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\PagesSchema;
use App\OpenApi\Schemas\PoginatorLinksSchema;
use App\OpenApi\Schemas\PoginatorMetaSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListPagesResponse extends ResponseFactory
{
    public function build(): Response
    {
        return Response::ok()->description('Successful response')->content(
            MediaType::json()->schema(
                Schema::object()->properties(
                    Schema::array('data')->items(PagesSchema::ref()),
                    PoginatorMetaSchema::ref('meta'),
                    PoginatorLinksSchema::ref('links')
                )
            )
        );
    }
}
