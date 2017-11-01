<?php
/**
 * Created by PhpStorm.
 * User: aref
 * Date: 11/1/17
 * Time: 4:11 PM
 */
array(
    'should' =>
        array(
            0 =>
                array(
                    'match' =>
                        array(
                            'title' =>
                                array(
                                    'query' => 'Alice',
                                    'boost' => 3,
                                ),
                        ),
                ),
            1 =>
                array(
                    'match' =>
                        array(
                            'author_name' =>
                                array(
                                    'query' => 'Alice',
                                    'boost' => 2,
                                ),
                        ),
                ),
            2 =>
                array(
                    'match' =>
                        array(
                            'description' =>
                                array(
                                    'query' => 'Alice',
                                    'boost' => 1,
                                ),
                        ),
                ),
        ),
    'filter' =>
        array(
            'bool' =>
                array(
                    'must' =>
                        array(
                            0 =>
                                array(
                                    'range' =>
                                        array(
                                            'year' =>
                                                array(
                                                    'lt' => 2008,
                                                ),
                                        ),
                                ),
                        ),
                    'should' =>
                        array(
                            0 =>
                                array(
                                    'must' =>
                                        array(
                                            0 =>
                                                array(
                                                    'range' =>
                                                        array(
                                                            'year' =>
                                                                array(
                                                                    'gt' => 2016,
                                                                ),
                                                        ),
                                                ),
                                            1 =>
                                                array(
                                                    'term' =>
                                                        array(
                                                            'author_id' => '33',
                                                        ),
                                                ),
                                        ),
                                ),
                        ),
                ),
        ),
);

array(
    'should' =>
        array(
            0 =>
                array(
                    'match' =>
                        array(
                            'title' =>
                                array(
                                    'query' => 'Emory Becker',
                                    'boost' => 3,
                                ),
                        ),
                ),
            1 =>
                array(
                    'match' =>
                        array(
                            'author_name' =>
                                array(
                                    'query' => 'Emory Becker',
                                    'boost' => 2,
                                ),
                        ),
                ),
            2 =>
                array(
                    'match' =>
                        array(
                            'description' =>
                                array(
                                    'query' => 'Emory Becker',
                                    'boost' => 1,
                                ),
                        ),
                ),
        ),
    'filter' =>
        array(
            'bool' =>
                array(
                    'must' =>
                        array(
                            0 =>
                                array(
                                    'range' =>
                                        array(
                                            'year' =>
                                                array(
                                                    'lt' => 2008,
                                                ),
                                        ),
                                ),
                        ),
                ),
        ),
);
