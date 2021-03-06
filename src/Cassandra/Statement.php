<?php

/**
 * Copyright 2015 DataStax, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Cassandra;

/**
 * All statements implement this common interface.
 *
 * @see Cassandra\SimpleStatement
 * @see Cassandra\PreparedStatement
 * @see Cassandra\BatchStatement
 */
interface Statement
{
    /**
     * @access private
     *
     * @param array|null $arguments
     * @param int|null   $consistency       One of the \Cassandra::CONSISTENCY_* constants
     * @param int|null   $serialConsistency One of the \Cassandra::CONSISTENCY_* constants
     * @param int|null   $pageSize
     *
     * @return resource Actual statement resource
     */
    public function resource(array $arguments = null, $consistency = null, $serialConsistency = null, $pageSize = null);
}
