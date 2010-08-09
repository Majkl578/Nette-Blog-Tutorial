<?php

class CommentsModel
{
    public static function fetchAll($post_id)
    {
            return dibi::query('
            SELECT *
            FROM [comments]
            WHERE [post_id] = %i', $post_id
        );
    }

	public static function insert($data)
{
    return dibi::query('
        INSERT INTO [comments]', $data
    );
}
}